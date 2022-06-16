<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

use App\Models\Schiffre;
use App\Models\Saisie;
use App\Models\Alerte;
use App\Models\Theme;
use App\Models\Salerte;

use App\Http\Indicateurs\Indicateurs;


use App\Traits\SalerteIsDanger;
use App\Traits\LitJson;
use App\Traits\ThemesTools;
use App\Traits\FormatSalertes;
/*
// Controller destiné à manipuler les chiffres, c-a-d les données numériques liées
// au troupeau et qui doivent ensuite être calculées.
// C'est la raison pour laquelle il s'agit de Schiffre (avec un S) car il s'agit
// de données saisies (comme Salerte, Sorigine)
// Attention! c'est un contrôleur un peu particulier car s'il y a un modèle Schiffre
// la manipulation des données chiffrées se fait aussi avec le modèle Salerte.
// De ce fait les méthodes show, edit, store ne sont pas construites
// de la manière habituelle.
 */
class SchiffreController extends Controller
{
  use LitJson, SalerteIsDanger, ThemesTools, FormatSalertes;

  /**
  * Affiche la synthèse des données chiffrées
  *
  * @param type $saisie_id
  * @return return view
  */
  public function show($saisie_id)
  {
    $saisie = Saisie::find($saisie_id);
    // On récupère toutes les alertes NUM et actives

    $alertes = Alerte::where('modalite_id', config::get('constantes.MODALITES.NUM'))->where('actif', 1)->get();
    // On récupère tous les thèmes
    $themes = Theme::all();
    // On ne garde que ceux de l'espèce de la saisie en cours
    $themes = $this->themesEspece($saisie->espece->id);
    // On ne garde que les thèmes des alertes NUM et actives
    $themes = $this->alertesThemes($alertes);
    // On récupère toutes les salertes de la saisie en cours
    $salertes = Salerte::where('saisie_id', $saisie_id)
                        ->addSelect(['modalite_id'=> Alerte::select('modalite_id')
                        ->whereColumn('alerte_id', 'alertes.id')
                      ])->get();

    $salertesNum = $salertes->where('modalite_id', config::get('constantes.MODALITES.NUM'));

    // On formate $salertes pour l'affichage
    $salertes = $this->formatSalertes($salertes);

    return view('saisie.schiffres.show', [
    'saisie' => Saisie::find($saisie_id),
    // 'salertesNum_groupes' => $salertesNum_groupes,
    'themes' => $themes,
    'salertesNum' => $salertesNum,
    ]);

  }


  /**
  * Accès à la saisie des données chiffrées
  *
  *
  * @param type var Description
  * @return return type
  */
  public function edit($saisie_id)
  {
    $saisie = Saisie::find($saisie_id);

    $chiffresSaisisBruts = Schiffre::select('libelle', 'valeur')
    ->where("saisie_id", $saisie->id)
    ->get();
    // $chiffresSaisis = Collect();
    //
    // foreach ($chiffresSaisisBruts as $key => $value) {
    //
    //   $chiffresSaisis->put($value->libelle, $value->valeur);
    //
    // }
    // On récupère les libellé du formulaire dans un json dépendant de
    // l'espèce du type chiffresVL.json
    $chiffresBruts = $this->LitJson('parametres'.$saisie->espece->abbr.'.json');
    // On en fait une collection et l'on structure par groupe (effectif, mortalité, etc)
    $chiffres = Collect($chiffresBruts);
    $chiffresGroupes = $chiffres->groupBy('groupe');
    // dd($chiffresGroupes);

    return view('saisie.schiffres.edit', [
    'saisie' => $saisie,
    'chiffresSaisis' => $chiffresSaisisBruts,
    'chiffresGroupes' => $chiffresGroupes,
    ]);
  }

  /**
  * enregistre les chiffres saisies et fait les calculs des indicateurs
  * vérifie que les données sont cohérentees et stocke les indicateurs.
  *
  * @param type var Description
  * @return return type
  */
  public function store(Request $request)
  {
    $chiffres = $request->all();

    array_shift($chiffres); // on enlève le Token
    // On enlève la ligne saisie_id et on
    // la récupère dans une variable
    $saisie_id = array_shift($chiffres);
    $espece_abbr = Saisie::find($saisie_id)->espece->abbr;
    // On récupère les libellé du formulaire dans un json dépendant de
    // l'espèce du type chiffresVL.json
    $parametres = $this->LitJson('parametres'.$espece_abbr.'.json');
    // Création d'un objet indicateurs pour le calcul et le stockage
    $indicateurs = new Indicateurs($saisie_id, $chiffres, $parametres);
    // Avec Indicateurs on vérifier que la saisie n'est pas incohérente
    // La classe Indicateurs va stocker les ondicateurs calculés dans la table sindicateurs
    // si la saisie n'est pas valide on retourne au formulaire
    $indicateurs->calculIndicateurs();
    if($indicateurs->getErreurs()->count() > 0) {

      return redirect()->back()->with(['message' => $indicateurs->getErreurs(), 'couleur' => 'alert-danger']);

    }
    // Sinon on poursuit l'enregistrement des données
    else {
      // On stocke les indicateurs calculés dans la table salertes avec la
      // méthode store();
      $indicateurs->store();
      // 0n enregistre les nouvelles données avec une ligne par élément chiffré
      foreach ($chiffres as $libelle => $valeur) {
        Schiffre::updateOrCreate(
        ['saisie_id' => $saisie_id, 'libelle' => $libelle],
        ['valeur' => ($valeur == null) ? 0 : $valeur ]
        );
      }
      // Dans la table salertes, on indique à la colonne "danger"
      // si la valeur est en dehors de normes (borne_sup, borne_inf), grace au trait SalerteIsDanger
      $this->salerteIsDanger($saisie_id);
      // On passe la variable hasnum de la table saisies à true
      Saisie::where('id', $saisie_id)->update(['hasnum' => 1]);

      // Et on renvoie à la méthode synthèseChiffres
      return redirect()->route('schiffre.show', $saisie_id);
    }

  }


}

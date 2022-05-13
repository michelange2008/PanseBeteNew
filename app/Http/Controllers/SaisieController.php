<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Saisie;
use App\Models\Theme;
use App\Models\Alerte;
use App\Models\Critalerte;
use App\Models\Salerte;
use App\Models\Sorigine;
use App\Models\Origine;
use App\Models\Schiffre;
use App\Models\Elevage;
use App\Traits\CreeAlerte;

use Illuminate\Support\Facades\Redirect;
use App\Http\Indicateurs\Indicateurs;
use App\Traits\SalerteIsDanger;
use App\Traits\CreeSaisie;
use App\Traits\LitJson;
use App\Traits\ThemesTools;
use App\Traits\FormatSalertes;

class SaisieController extends Controller
{
  use CreeAlerte, CreeSaisie, LitJson, SalerteIsDanger, ThemesTools, FormatSalertes;

  /*
  // Méthode qui conduit vers une nouvelle saisie
  // elle redirige vers l'accueil de saisie
  // TODO: supprimer tout ce qui est en rapport avec la saisie par pôle:
  //          - route alerte
  */
  public function nouvelle($elevage_nom, $espece_id)
  {
    $elevage = Elevage::firstOrCreate(['nom' => $elevage_nom]);

    session()->put('espece_id', $espece_id);

    $saisie_id = $this->nouvelleSaisie($elevage->id);

    return redirect()->route('saisie.accueil', ['saisie_id' => $saisie_id]);
  }

  /*
  // Affiche la page d'accueil d'une série
  // quand on fait une nouvelle saisie ou que l'on modifie une ancienne
  */
    public function accueil($saisie_id)
    {
      $saisie = Saisie::find($saisie_id);

      //##############################################################################
      // A SUPPRIMER QUAND TOUTES LES ESPECES SERONT FINIE
      // Dans le cas où c'est une espèce pour laquelle il n'y a pas de calcul auto
      // des données chiffrées, on affiche directement la saisie des observations
      if(!$saisie->espece->fini) {

        return redirect()->route('saisie.observations', ['saisie_id' => $saisie_id]);

      }
      // #############################################################################

      // Avec une saisie sur une espèce finie
      // Si il y a eu saisie des données num et des observations, on affiche
      // le résultat de la saisie avec un menu complet pour voir
      // ou modifier cette saisie
      if ($saisie->hasnum && $saisie->hasobs) {
        // Utilisation du trait themesEspeceAvecDanger pour ne prendre que les thèmes de l'espèce
        // et rajouter le nombre de salertes avec danger )= true
        $themes = $this->themesEspeceAvecDanger($saisie);

        $salertes = Salerte::where('saisie_id', $saisie_id)->get();
        $salertes = $this->formatSalertes($salertes);

        return view('accueil.accueilSaisiePleine', [
          'saisie' => $saisie,
          'salertes' => $salertes,
          'themes' => $themes,
          'alertes' => Alerte::where('saisie_id', $saisie->id),
        ]);

      // S'il n'y a eu aucune saisie, ni num ni obs on affiche une page d'accueil spécifique
      // Variable si il y a eu l'une ou l'autre des types de saisies (num, obs ou rien du tout)
      } else {
        $contenu = $this->LitJson('saisie_accueil_fini.json');

        return view('accueil.accueilSaisieVide', [
        'saisie' => $saisie,
        'contenu' => $contenu,
        ]);

      }

    }

    /*
    // Méthode appelée après le choix d'une nouvelle saisie
    // et pour la saisie des observations
    */
    public function observations($saisie_id)
    {
      $saisie = Saisie::find($saisie_id);
      // Boucle pour le cas où des espèces ne sont pas différenciées entre num et observation
      $modalite = ($saisie->espece->fini) ? ['OBS'] : ['OBS', 'NUM', 'CAL'];

      $alertes = Alerte::where('espece_id', $saisie->espece->id)
      ->where('modalite', $modalite)
      ->where('actif', true)
      ->get();

      // On utiliser la méthode usedThemes du trait ThemesTools
      $themes = $this->alertesThemes($alertes);
      // On extraie les salertes
      $salertes= Salerte::where('saisie_id', $saisie->id)->get();
      // On passe en revue les alertes
      foreach ($alertes as $alerte) {
        // On recherche s'il y a déjà eu une saisie en rapport avec cette alerte
        $salerte = $salertes->where('alerte_id', $alerte->id)->first();
        // Si oui on y rentre la valeur
        if($salerte != null) {
          $alerte->saisie = $salerte->valeur;
        }

      }

      return view('saisie.saisieObservations',[
      'saisie' => $saisie,
      'alertes' => $alertes,
      'themes' => $themes,
      'critalertes' => Critalerte::all(),
      ]);


    }

    /**
    * Accès à la saisie des données chiffrées
    *
    *
    * @param type var Description
    * @return return type
    */
    public function chiffres($saisie_id)
    {
      $saisie = Saisie::find($saisie_id);

      $chiffresSaisisBruts = Schiffre::select('libelle', 'valeur')
      ->where("saisie_id", $saisie->id)
      ->get();
      $chiffresSaisis = Collect();

      foreach ($chiffresSaisisBruts as $key => $value) {

        $chiffresSaisis->put($value->libelle, $value->valeur);

      }
      // On récupère les libellé du formulaire dans un json dépendant de
      // l'espèce du type chiffresVL.json
      $chiffresBruts = $this->LitJson('parametres'.$saisie->espece->abbr.'.json');
      // On en fait une collection et l'on structure par groupe (effectif, mortalité, etc)
      $chiffres = Collect($chiffresBruts);
      $chiffresGroupes = $chiffres->groupBy('groupe');

      return view('saisie.saisieChiffres', [
      'saisie' => $saisie,
      'chiffresSaisis' => $chiffresSaisis,
      'chiffresGroupes' => $chiffresGroupes,
      ]);
    }

    /*
    // Méthode pour enregistrer la saisie correspondant aux alertes d'un thème
    // Elle valide la saisie
    // ELle enregistre en bdd les alertes
    // Elle renvoie une vue avec les alertes anormales pour pouvoir voir les questions correspondantes
    */
    public function enregistreObservations(Request $request)
    {
      $datas = $request->all();

      array_shift($datas);

      $saisie_id = array_shift($datas);

      foreach ($datas as $Aalerte_id => $valeur) {
        // On enlève le préfixe A
        $alerte_id = substr($Aalerte_id, 1);
        // Utilisation du trait CréeAlerte pour savoir si la valeur est en déhors des clous
        Salerte::updateOrCreate(
        ['alerte_id' => $alerte_id, 'saisie_id' => $saisie_id],
        ['valeur' => $valeur, 'danger' => $this->creeAlerte($alerte_id, $valeur)],
        );
      }
      // On passe la variable hasObs à true
      Saisie::where('id', $saisie_id)->update(['hasobs' => 1]);

      $liste_origines = [];
      $ori = sOrigine::select('origine_id')->where('saisie_id', session()->get('saisie_id'))->get();
      foreach ($ori as $value) {
        $liste_origines[] = $value->origine_id;
      }

      return redirect()->route('saisie.accueil', $saisie_id);
    }

    /**
    * enregistre les chiffres saisies et fait les calculs des indicateurs
    * vérifie que les données sont cohérentees et stocke les indicateurs.
    *
    * @param type var Description
    * @return return type
    */
    public function enregistreChiffres(Request $request)
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
          ['valeur' => $valeur]
          );
        }
        // Dans la table salertes, on indique à la colonne "danger"
        // si la valeur est en dehors de normes (borne_sup, borne_inf), grace au trait SalerteIsDanger
        $this->salerteIsDanger($saisie_id);
        // On passe la variable hasnum de la table saisies à true
        Saisie::where('id', $saisie_id)->update(['hasnum' => 1]);

        // Et on renvoie à la méthode synthèseChiffres
        return redirect()->route('saisie.syntheseChiffres', $saisie_id);
      }

    }

    /**
    * Affiche la synthèse des données chiffrées
    *
    * @param type $saisie_id
    * @return return view
    */
    public function syntheseChiffres($saisie_id)
    {
      $saisie = Saisie::find($saisie_id);
      // On récupère toutes les alertes NUM et actives

      $alertes = Alerte::where('modalite', 'NUM')->where('actif', 1)->get();
      // On récupère tous les thèmes
      $themes = Theme::all();
      // On ne garde que ceux de l'espèce de la saisie en cours
      $themes = $this->themesEspece($saisie->espece->id);
      // On ne garde que les thèmes des alertes NUM et actives
      $themes = $this->alertesThemes($alertes);
      // On récupère toutes les salertes de la saisie en cours
      $salertes = Salerte::where('saisie_id', $saisie_id)
                          ->addSelect(['modalite'=> Alerte::select('modalite')
                          ->whereColumn('alerte_id', 'alertes.id')
                        ])->get();

      $salertesNum = $salertes->where('modalite', 'NUM');

      // On formate $salertes pour l'affichage
      $salertes = $this->formatSalertes($salertes);

      return view('saisie.syntheseChiffres', [
      'saisie' => Saisie::find($saisie_id),
      // 'salertesNum_groupes' => $salertesNum_groupes,
      'themes' => $themes,
      'salertesNum' => $salertesNum,
      ]);

    }

  }

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

        return view('saisie.accueilSaisiePleine', [
          'saisie' => $saisie,
          'salertes' => $salertes,
          'themes' => $themes,
          'alertes' => Alerte::where('saisie_id', $saisie->id),
        ]);

      // S'il n'y a eu aucune saisie, ni num ni obs on affiche une page d'accueil spécifique
      // Variable si il y a eu l'une ou l'autre des types de saisies (num, obs ou rien du tout)
      } else {
        $contenu = $this->LitJson('saisie_accueil_fini.json');

        return view('saisie.accueilSaisieVide', [
        'saisie' => $saisie,
        'contenu' => $contenu,
        ]);

      }

    }

    /*
    // Méthode appelée après le choix d'une nouvelle saisie
    // et pour la saisie des observations
    */
    public function saisieObservations($saisie_id)
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


  }

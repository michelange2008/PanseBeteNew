<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Saisie;
use App\Models\Theme;
use App\Models\Alerte;
use App\Models\Salerte;
use App\Models\Sorigine;
use App\Models\Origine;
use App\Models\Schiffre;
use App\Models\Elevage;
use App\Traits\CreeAlerte;

use Illuminate\Support\Facades\Redirect;
use App\Http\Indicateurs\Indicateurs;
use App\Traits\StoreIndicateurs;
use App\Traits\CreeOrigines;
use App\Traits\CreeSaisie;
use App\Traits\SupprimePole;
use App\Traits\LitJson;

class SaisieController extends Controller
{
  use CreeAlerte, CreeSaisie, CreeOrigines, SupprimePole, LitJson, StoreIndicateurs;

  /*
  // Méthode qui conduit vers une nouvelle saisie
  // elle redirige vers accueil
  */
  public function nouvelle($elevage_nom, $espece_id)
  {
    $elevage = Elevage::firstOrCreate(['nom' => $elevage_nom]);

    session()->put('espece_id', $espece_id);

    $saisie_id = $this->nouvelleSaisie($elevage->id);

    return redirect()->route('saisie.accueil', ['saisie_id' => $saisie_id]);
  }

  /*
  // Méthode qui affiche le choix entre une saisie par alertes ou par pôle
  //quand on fait une nouvelle saisie ou que l'on modifie une ancienne
  */
  public function accueil($saisie_id)
  {
    $saisie = Saisie::find($saisie_id);

    if($saisie->espece->fini) {
      // Dans le cas où c'est une espèce pour laquelle il y a un calcul auto
      // des données chiffrées en renvoie à la saisie de ces données
      return redirect()->route('saisie.chiffres', ['saisie_id' => $saisie_id]);

    } else {
      // Sinon on renvoie à la saisie complètes des observations
      return redirect()->route('saisie.observations', ['saisie_id' => $saisie_id]);

    }

  }

  /*
  // Méthode appelée après le choix d'une nouvelle saisie
  // puis le choix d'un approche exhaustive ou par pôle (= $type)
  */
  public function observations($saisie_id)
  {
    $saisie = Saisie::find($saisie_id);

    // Trait pour ne prendre que les thèmes qui ont des alertes pour l'espèce concernée
    $themes = $this->supprimePole($saisie);

    $alertes = Alerte::where('espece_id', $saisie->espece_id)->get();

    $sAlertes = Salerte::where('saisie_id', session()->get('saisie_id'))->get();

    return view('saisie.saisieObservations',[
    'saisie' => $saisie,
    'themes' => $themes,
    'alertes' => $alertes,
    'sAlertes' => $sAlertes,
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
    $chiffresSaisisBruts =Schiffre::select('libelle', 'valeur')->where("saisie_id", $saisie->id)->get();
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
      'chiffresSaisis' => $chiffresSaisis,
      'saisie' => $saisie,
      'chiffresGroupes' => $chiffresGroupes,
    ]);
  }

  /*
  // Méthode pour enregistrer la saisie correspondant aux alertes d'un thème
  // Elle valide la saisie
  // ELle enregistre en bdd les alertes
  // Elle renvoie une vue avec les alertes anormales pour pouvoir voir les questions correspondantes
  */
  public function enregistre(Request $request)
  {
    // si c'est une approche par pole, on ne prend que les alertes correspondant au pole (=theme) en cours
    if(session()->get('type_saisie') == config('constantes.pol')) {
      $alertes = Alerte::where('theme_id', session()->get('theme')->id)
      ->where('espece_id', session()->get('espece_id'))
      ->get();

      $themes[] = session()->get('theme');
    }
    else {
      $alertes = Alerte::where('espece_id', session()->get('espece_id'))->get();
      $themes = Theme::all();
    }
    $saisie = Saisie::find(session()->get('saisie_id'));
    // VALIDATION
    // après utilisation d'un middleware Sanitize qui transforme en 0 les null
    foreach ($alertes as $alerte) {

      if($alerte->type === "pourcentage")
      {
        $essai = request()->validate([
        'alerte_'.$alerte->id => 'numeric|between:0,100',
        ]);
      }
      elseif($alerte->type === "valeur")
      {
        $essai = request()->validate([
        'alerte_'.$alerte->id => 'numeric|min:0',
        ]);
      }
    }
    // en cas de modification d'une saisie déjà réalisée on récupère les id des origines pour pouvoir recocher les cases
    // En effet le trait CreeAlerte élimine toutes les alertes de la saisie
    $liste_origines = [];
    $ori = sOrigine::select('origine_id')->where('saisie_id', session()->get('saisie_id'))->get();
    foreach ($ori as $value) {
      $liste_origines[] = $value->origine_id;
    }

    $datas = array_slice($request->all(),1); // on enlève le token

    $resultats = $this->renvoieSalerte($datas, $alertes); // utilisation du trait CreeAlerte pour l'enregistrement de la saisie

    if($resultats->count() === 0) // aucune alerte anormale
    {
      $message = "Il n'y a aucun problème";
      // if(session()->get('type_saisie') == config('constantes.ale'))
      // {
      return view('saisie.resultatsGlobalOk', [
      'resultats' => $resultats,
      'saisie' => $saisie,
      ])->with(['message' => $message]);
      // }
      // else
      // {
      //   return view('saisie.resultatsPoleOk', [
      //       'resultats' => $resultats,
      //       'saisie' => $saisie,
      //       'theme' => session()->get('theme'),
      //     ])->with(['message' => $message]);
      // }
    }
    else // au moins une alerte anormale
    {
      return view('saisie.resultats', [
      'resultats' => $resultats,
      'themes' => $themes,
      'saisie' => $saisie,
      'liste_origines' => $liste_origines,
      ]);
    }
  }

  /**
  * enregistre les chiffres saisies et fait les calculs
  *
  * Undocumented function long description
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
    // Avec IndicateursESP on vérifier que la saisie n'est pas incohérente
    // La classe IndicateursESP va stocker les ondicateurs calculés dans la table sindicateurs
    // si la saisie n'est pas valide on retourne au formulaire
    $indicateurs->calculIndicateurs();
    if($indicateurs->getErreurs()->count() > 0) {

      return redirect()->back()->with(['message' => $indicateurs->getErreurs(), 'couleur' => 'alert-danger']);

    }
    // Sinon on poursuit l'enregistrement des données
    else {
      // On stocke les indicateurs calculés dans la table salerte avec le trait StoreIndicateurs
      $indicateurs->store();
      // Et on enregistre les nouvelles données avec une ligne par élément chiffré
      foreach ($chiffres as $libelle => $valeur) {
        DB::table('schiffres')->updateOrInsert(
          ['saisie_id' => $saisie_id, 'libelle' => $libelle],
          ['valeur' => $valeur]
        );
      }

      // Et on renvoie à la méthode synthèseChiffres
      return redirect()->route('saisie.syntheseChiffres', $saisie_id);
    }
  }

  /**
   * undocumented function summary
   *
   * Undocumented function long description
   *
   * @param type var Description
   * @return return type
   */
  public function syntheseChiffres($saisie_id)
  {
    $saisie = Saisie::find($saisie_id);
    $sindicateurs = DB::table('sindicateurs')
                    ->select('themes.nom AS nom_theme', 'alertes.nom as nom_alerte',
                    'sindicateurs.indicateur', 'alertes.unite', 'alertes.niveau AS niveau')
                    ->join('alertes', 'alertes.id', '=', 'sindicateurs.alerte_id')
                    ->join('themes', 'alertes.theme_id', '=' , 'themes.id')
                    ->where('alertes.modalite', '<>', 'OBS')
                    ->where('alertes.espece_id', $saisie->espece_id)
                    ->where('sindicateurs.saisie_id', $saisie_id)
                    ->get();

    $sindicateurs_groupes = $sindicateurs->groupBy('nom_theme');

    return view('saisie.syntheseChiffres', [
      'saisie' => Saisie::find($saisie_id),
      'sindicateurs_groupes' => $sindicateurs_groupes,

    ]);

  }

  /*
  // Méthode qui ouvre la vue sur les alertes d'un thème dans le cadre d'une nouvelle saisie
  // ou de la modification d'une saisie existante
  */
  public function alertes($theme_id)
  {
    $theme = Theme::find($theme_id);

    session()->put('theme', $theme);

    $saisie = Saisie::find(session()->get('saisie_id'));

    $sAlertes = Salerte::where('saisie_id', session()->get('saisie_id'))->get();

    $alertes = Alerte::where('theme_id', $theme_id)
    ->where('espece_id', $saisie->espece->id)
    ->get();

    if($alertes->count() > 0)
    {
      return view('saisie.saisieParPole', [
      'saisie' => $saisie,
      'alertes' => $alertes,
      'sAlertes' => $sAlertes,
      ]);
    }
    else {
      session()->flash('message', "Il n'y a pas d'alerte pour ce pôle !");

      return back()->withInput();
    }
  }

  /*
  // Méthode pour modifier une saisie existante
  // Elle redirige vers accueil
  */
  public function modifier($saisie_id)
  {
    $saisie = Saisie::find($saisie_id);

    return redirect()->route('saisie.accueil', ['saisie_id' => $saisie->id]);

    // Trait pour ne prendre que les thèmes qui ont des alertes pour l'espèce concernée

    // $themes = $this->supprimePole($saisie);
    //
    // session()->put('espece_id', $saisie->espece->id);
    //
    // session()->put('type_saisie', config('constantes.pol'));
    //
    // session()->put('saisie_id', $saisie_id);
    //
    // return view('saisie.choixDuPole', [
    //   'themes' => $themes,
    //   'saisie' => $saisie,
    // ]);
  }

  /*
  // Méthode pour enregistrer les origine d'une alerte anormale
  */
  public function storeOrigines(Request $request)
  {

    $this->creeOrigines(array_slice($request->all(),1));
    // si c'est une saisie par pôles on renvoie à la liste des pôles pour saisir le suivant
    if(session()->get('type_saisie') == config('constantes.pol')) {

      return view('saisie.choixDuPole', [
      'saisie' => Saisie::find(session()->get('saisie_id')),
      'themes' => Theme::all(),
      ]);
    }
    // Sinon c'est que c'est une saisie par alerte et on renvoie à la synthèse
    else {
      return redirect()->route('lecture.detail', session('saisie_id'));
    }
  }

}

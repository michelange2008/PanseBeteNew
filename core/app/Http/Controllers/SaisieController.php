<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saisie;
use App\Models\Theme;
use App\Models\Alerte;
use App\Models\Salerte;
use App\Models\Origine;
use App\Models\Elevage;
use App\Traits\CreeAlerte;

use Illuminate\Support\Facades\Redirect;
use App\Traits\CreeOrigines;
use App\Traits\CreeSaisie;

class SaisieController extends Controller
{
    use CreeAlerte;
    use CreeSaisie;
    use CreeOrigines;

    /*
    // Méthode qui affiche la liste des thèmes quand on fait une nouvelle saisie
    // ou que l'on modifie une ancienne
    */
    public function accueil()
    {
      $themes = Theme::all();

      $saisie = Saisie::find(session()->get('saisie_id'));

      session()->forget('theme');
      return view('saisie.saisieAccueil',[
        'themes' => $themes,
        'saisie' => $saisie,
      ]);
    }

    /*
    // Méthode qui conduit vers une nouvelle saisie
    // elle redirige vers accueil
    */
    public function nouvelle($elevage, $espece_id)
    {
        Elevage::firstOrCreate(['nom' => $elevage]);

        session()->put('elevage', Elevage::where('nom', $elevage)->first());

        session()->put('espece_id', $espece_id);

        $this->nouvelleSaisie();

        return Redirect()->action('SaisieController@accueil');
    }

    /*
    // Méthode pour modifier une saisie existante
    // Elle redirige vers accueil
    */
    public function modifier($saisie_id)
    {
      $saisie = Saisie::find($saisie_id);

      session()->put('saisie_id', $saisie_id);

      return Redirect()->route('saisie.accueil');
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

      session()->put('espece', $saisie->espece);

      $sAlertes = Salerte::where('saisie_id', session()->get('saisie_id'))->get();

      $alertes = Alerte::where('theme_id', $theme_id)
      ->where('espece_id', $saisie->espece->id)
      ->get();

      if($alertes->count() > 0)
      {
          return view('saisie.alertes', [
              'alertes' => $alertes,
              'sAlertes' => $sAlertes,
          ]);
      }
      else {
          return view('travaux');
      }
    }

    /*
    // Méthode pour enregistrer la saisie correspondant aux alertes d'un thème
    // Elle valide la saisie
    // ELle enregistre en bdd les alertes
    // Elle renvoie une vue avec les alertes anormales pour pouvoir voir les questions correspondantes
    */
    public function enregistre(Request $request)
    {
      if(!session()->has('theme')) // condition pour éviter une arrivée à cette méthode par des voies non prévues
      {
        return Redirect()->action('AccueilController@accueil');
      }

      session()->forget('alerte'); // Elimine la valeur alerte stockée

      $alertes = Alerte::where('theme_id', session()->get('theme')->id)->get();

      // VALIDATION
      // après utilisation d'un middleware Sanitize qui transforme en 0 les null
      foreach ($alertes as $alerte) {

        if($alerte->type === "pourcentage")
        {
          $essai = request()->validate([
            'alerte_'.$alerte->id => 'integer|between:0,100',
          ]);
        }
        elseif($alerte->type === "valeur")
        {
          $essai = request()->validate([
            'alerte_'.$alerte->id => 'integer|min:0',
          ]);
        }
      }

      $datas = array_slice($request->all(),1); // on enlève le token

      $resultats = $this->renvoieSalerte($datas); // utilisation du trait CreeAlerte pour l'enregistrement de la saisie

      if($resultats->count() === 0) // aucune alerte anormale
      {
          $message = "Ok, il n'y a pas de problème";
          return view('saisie.resultats', [
              'resultats' => $resultats,
          ])->with(['message' => $message]);
      }
      else // au moins une alerte anormale
      {
          return view('saisie.resultats', [
              'resultats' => $resultats,
          ]);
      }
    }

    /*
    // Méthode pour enregistrer les origine d'une alerte anormale
    */
    public function storeOrigines(Request $request)
    {

        $this->creeOrigines(array_slice($request->all(),1));

        return redirect()->action('SaisieController@accueil');
    }

}

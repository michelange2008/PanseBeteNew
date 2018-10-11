<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Alerte;
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

    public function accueil()
    {
      $themes = Theme::all();

      session()->forget('theme');

      return view('saisie.saisieAccueil',[
        'themes' => $themes,
      ]);
    }

    public function nouvelle($elevage)
    {

        Elevage::firstOrCreate(['nom' => $elevage]);

        session()->put('elevage_id', Elevage::where('nom', $elevage)->first()->id);
        // dd(session()->get('elevage'));

        $this->nouvelleSaisie();

        return Redirect()->action('SaisieController@accueil');
    }

    public function alertes($theme_id)
    {
      $theme = Theme::find($theme_id);

      session()->put('theme', $theme);

      $alertes = Alerte::where('theme_id', $theme_id)
      ->where('espece_id', session()->get('espece')->id)
      ->get();

      if($alertes->count() > 0)
      {
          return view('saisie.alertes', [
              'alertes' => $alertes,
          ]);
      }
      else {
          return view('travaux');
      }
    }

    public function enregistre(Request $request)
    {
      if(!session()->has('theme'))
      {
        return Redirect()->action('AccueilController@accueil');
      }


      foreach ($request->input() as $key => $value) {
          if (empty($value)) {
              $request->request->set($key, 0);
          }
      }

      session()->forget('alerte');

      $alertes = Alerte::where('theme_id', session()->get('theme')->id)->get();

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

      $datas = array_slice($request->all(),1);



      $resultats = $this->renvoieSalerte($datas);

      if($resultats->count() === 0)
      {
          $message = "Ok, il n'y a pas de problème";
          return view('saisie.resultats', [
              'resultats' => $resultats,
          ])->with(['message' => $message]);
      }
      else
      {
          return view('saisie.resultats', [
              'resultats' => $resultats,
          ]);

      }

    }

    public function origines($alerte_id)
    {
      $alerte = Alerte::find($alerte_id);

      session()->put('alerte', $alerte);

      $origines = Origine::where('alerte_id', $alerte_id);


      return view('saisie.origines', [
        'origines' => $origines,
      ]);
    }

    public function storeOrigines(Request $request)
    {
        // session()->flashInput(array_slice($request->all(),1));

        $this->creeOrigines(array_slice($request->all(),1));

        return redirect()->action('SaisieController@accueil');
    }

}

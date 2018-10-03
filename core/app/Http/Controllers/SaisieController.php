<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Alerte;
use App\Models\Origine;
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
    
    public function nouvelle()
    {
        $this->nouvelleSaisie();
        
        return Redirect()->action('SaisieController@accueil');
    }

    public function alertes($theme_id)
    {
      $theme = Theme::find($theme_id);

      session()->put('theme', $theme);

      if(!session()->has('espece'))
      {
          return Redirect()->action('AccueilController@accueil');
      }

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
      session()->forget('alerte');
        
      $datas = array_slice($request->all(),1);
      
      if(!session()->has('theme'))
      {
          return Redirect()->action('AccueilController@accueil');
      }
      
      
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
        session()->flashInput(array_slice($request->all(),1));
        
        $this->creeOrigines(array_slice($request->all(),1));
//         if(session()->has('origines'))
//         {
//             foreach(session()->get('origines') as $origine)
//             {
//                 if(!in_array(array_slice($request->all(),1), $origine))
//                 {
//                     session()->push('origines', array_slice($request->all(),1));
//                 }
//             }
//         }
        return redirect()->action('SaisieController@accueil');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espece;
use App\Models\Alerte;
use App\Traits\CreeSaisie;

class AccueilController extends Controller
{
    use CreeSaisie;
    
    public function accueil()
    {
      $especes = Espece::all();
      session()->forget(['espece', 'theme']);
      
      return view('accueil', [
        'especes' => $especes,
      ]);
    }

    public function choix($espece_id)
    {
      session()->forget(['saisie', 'alertes']);

      $espece = Espece::find($espece_id);
      
      $alertes = Alerte::where('espece_id', $espece_id)->count();
      
      session()->put('espece', $espece);
      
      if($alertes > 0)
      {
          return view('choix');
      }
      else 
      {
          return view('travaux');
      }
    }

    public function presentation()
    {
      return view('divers.presentation');
    }

    public function infos()
    {
      return "infos";
    }
}

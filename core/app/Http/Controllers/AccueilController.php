<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espece;
use App\Models\Alerte;
use App\Models\Saisie;
use App\Models\Participant;
use App\Traits\CreeSaisie;
use App\Traits\EffaceElevages;

class AccueilController extends Controller
{
    use CreeSaisie;
    use EffaceElevages;

    public function accueil()
    {
      $this->effaceElevages();

      $especes = Espece::all();

      session()->forget(['espece', 'theme']);

      return view('accueil', [
        'especes' => $especes,
      ]);
    }

    // public function choix($espece_id)
    // {
    //   session()->forget(['saisie', 'alertes']);
    //
    //   $espece = Espece::find($espece_id);
    //
    //   $nbAlertes = Alerte::where('espece_id', $espece_id)->count();
    //
    //   session()->put('espece', $espece);
    //
    //   if($nbAlertes > 0)
    //   {
    //       $nbSaisies = Saisie::where('user_id', auth()->user()->id)->where('espece_id', $espece_id)->count();
    //       return view('choix', [
    //         'nbSaisies' => $nbSaisies,
    //       ]);
    //   }
    //   else
    //   {
    //       return view('travaux');
    //   }
    // }

    public function instructions()
    {
      return view('divers.instructions');
    }

    public function presentation()
    {
      return view('divers.presentation');
    }

    public function credits()
    {
      $especes = Espece::all();
      $participants = Participant::all();

      return view('divers.credits', [
        'especes' => $especes,
        'participants' => $participants,
      ]);
    }

    public function entravaux($espece_id)
    {
      if(Espece::find($espece_id)->fini === 1)
      {
        return 1;
      }
      else {
        return error;
      }
    }
}

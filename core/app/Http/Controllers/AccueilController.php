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

    public function mentions_legales()
    {
      return view('divers.mentions_legales');
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

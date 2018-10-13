<?php
namespace App\Traits;

use App\Models\Saisie;
use Carbon\Carbon;

trait CreeSaisie
{

    public function nouvelleSaisie()
    {
        $saisie = new Saisie();

        $saisie->user_id = auth()->guard()->user()->id;

        $saisie->espece_id = session()->get('espece')->id;

        $saisie->elevage_id = session()->get('elevage')->id;

        $saisie->save();

        $saisies = Saisie::where('user_id', auth()->guard()->user()->id)
                          ->where('espece_id', session()->get('espece')->id)
                          ->where('elevage_id', session()->get('elevage')->id)
                          ->orderByDesc('created_at')->first();

        session()->put('saisie_id', $saisies->id);

    }

}

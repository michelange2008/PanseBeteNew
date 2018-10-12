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

        $saisie->elevage_id = session()->get('elevage_id');

        $saisies = Saisie::where('user_id', auth()->guard()->user()->id)
                          ->where('espece_id', session()->get('espece')->id)
                          ->where('elevage_id', session()->get('elevage_id'))
                          ->orderByDesc('created_at')->first();

        $saisie->save();

        session()->put('saisie_id', Saisie::where('elevage_id', session()->get('elevage_id'))
                                      ->where('espece_id', session()->get('espece')->id)
                                      ->first());

    }

}

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

        if($saisies !== null) // S'il existe déjà une saisie avec cet utilisateur et cette espece
        {
            $maintenant = Carbon::now();

            if($maintenant->diffInMinutes($saisies->created_at)<30)// Et que cette saisie date de moins de 30 mn
            {
                $saisie_id = $saisies->id;
            }
            else
            {
                $saisie->save();
                $saisieAncienne = Saisie::where('user_id', auth()->guard()->user()->id)
                ->where('espece_id', session()->get('espece')->id)
                ->first();
                $saisie_id = $saisieAncienne->id;
            }
        }
        else // s'il n'y avait aucune saisie on en crée une
        {
            $saisie->save();
            $saisieNouvelle = Saisie::where('elevage_id', session()->get('elevage_id'))
            ->where('espece_id', session()->get('espece')->id)
            ->first();
            $saisie_id = $saisieNouvelle->id;
        }

        session()->put('saisie_id', $saisie_id);

    }

}

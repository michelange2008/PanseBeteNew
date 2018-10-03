<?php
namespace App\Traits;

use App\Models\Alerte;
use App\Models\Salerte;
/**
 *
 */
trait CreeAlerte
{
  function renvoieSalerte($datas)
  {
    $resultats = collect();

    $alertes = Alerte::where('theme_id', session()->get('theme')->id)->get(); // choix d'un nombre restreint d'alerte pour éviter un foreach trop long

    foreach ($alertes as $alerte) {
        if($datas['alerte_'.$alerte->id] > $alerte->niveau)
        {
            $sAlerte = new Salerte();

            $sAlerte->saisie_id = session()->get('saisie_id');
            $sAlerte->alerte_id = $alerte->id;
            $sAlerte->valeur = $datas['alerte_'.$alerte->id];
            $sAlerte->danger = 1;

            if(Salerte::where('saisie_id', session()->get('saisie_id'))->where('alerte_id', $alerte->id)->count() === 0)
            {
                $sAlerte->save();
            }
            $sAlerte = Salerte::where('saisie_id', session()->get('saisie_id'))->where('alerte_id', $alerte->id)->first();
            $resultats->push($sAlerte);
        }
    }

    return $resultats;

  }

  function enregistreAlertes($alertes)
  {
      $alertes->save();
  }
}

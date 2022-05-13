<?php

namespace App\Traits;

use App\Models\Sorigine;
use App\Models\Origine;

/**
 * Ajoute des sorgines pour une saisie données à la liste de origines de l'alerte
 */
trait AjouteSorigine
{

  function ajouteSorigine($saisie_id, $alerte_id)
  {
    $origines = Origine::where('alerte_id', $alerte_id)->get();

    $sorigines = Sorigine::where('saisie_id', $saisie_id)->get();

    foreach ($origines as $origine) {

      $origine->cochee = 0;

      foreach ($sorigines as $sorigine) {

        if($origine->id == $sorigine->origine->id){

          $origine->cochee = 1;

        }

      }

    }

    return $origines;

  }

}

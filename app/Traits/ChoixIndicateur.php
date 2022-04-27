<?php
namespace App\Traits;

use App\Http\Indicateurs\IndicateursVL;
/**
 * Permet de créer un objet IndicateursESP en fonction de l'espèce
 */
trait ChoixIndicateur
{
  function choixIndicateur($saisie_id, $chiffres, $espece_abbr)
  {
    if ($espece_abbr === "VL") {
      return New IndicateursVL($saisie_id, $chiffres);
    }
  }
}

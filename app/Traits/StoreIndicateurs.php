<?php
namespace App\Traits;

use App\Models\Alerte;
use DB;
/**
 * Stocke en bdd les indicateurs de mortalité, morbidité près leur calcul
 * Appelé par SaisieController méthode enregistreChiffres
 */
trait StoreIndicateurs
{
  function storeIndicateurs($saisie_id, $chiffres)
  {
    foreach ($chiffres as $abbr => $valeur) {

      $alerte = Alerte::where('abbr', $abbr)->first();

      if($alerte != null) {

        DB::table('salertes')->updateOrInsert(
          ['alerte_id' => $alerte->id, 'saisie_id' => $saisie_id],
          ['valeur' => $valeur]);

      }
    }
  }
}

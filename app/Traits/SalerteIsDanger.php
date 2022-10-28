<?php
namespace App\Traits;

use App\Models\Alerte;
use App\Models\Salerte;
use App\Models\Numalerte;
/**
 * Tranferts les indicateurs stockés dans la table sindicateurs à la table salertes
 *
 * Appelé par SchiffreController méthode store
 */
trait SalerteIsDanger
{
  function salerteIsDanger($saisie_id)
  {
    // On recherche l'ensemble des salertes de la saisie
    $salertes = Salerte::where('saisie_id', $saisie_id)->get();
    // On les passe en revue
    foreach ($salertes as $salerte) {
        // On met la variable danger à false
        $danger = false;
        // On récupère la numalerte
        $numalerte = Numalerte::where('alerte_id', $salerte->alerte->id)->first();
        // Si la numalerte n'est pas nulle (cas des alertes de modalité NUM)
        if($numalerte !== null) {
          // On teste la variable valeur par rapport aux bornes de l'alerte correspondante
          if ($salerte->valeur < $numalerte->borne_inf || $salerte->valeur > $numalerte->borne_sup) {
            // Si elle est en dehors de bornes, on passe la variable danger à true
            $danger = true;

          }
          // Puis on essaye de la sauvegarder ou de la mettre à jour dans le table salertes
          try {

            Salerte::updateOrCreate(
              ['saisie_id' => $saisie_id, 'alerte_id' => $salerte->alerte_id],
              ['danger' => $danger]
            );

          } catch (\Exception $e) {

            dd($e." : ".$salerte->id);

          }
          
        }

    }
  }
}

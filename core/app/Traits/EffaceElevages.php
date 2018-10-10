<?php
namespace App\Traits;

use App\Models\Saisie;
use App\Models\Elevage;
/**
 *
 */
trait EffaceElevages
{
  public function effaceElevages()
  {
    $elevagesSaisis = Saisie::select('elevage_id')->get();

    $listeElevageIdSaisis = [];

    foreach($elevagesSaisis as $elevage)
    {

      $listeElevageIdSaisis[] = $elevage->elevage_id;

    }

    $listeElevages = Elevage::all();

    foreach ($listeElevages as $elevage) {
      if(!in_array($elevage->id, $listeElevageIdSaisis))
      {
        Elevage::destroy($elevage->id);
      }
    }
  }
}

<?php
namespace App\Traits;

use App\Models\Chiffre;
use App\Models\Espece;

use App\Traits\LitJson;
/**
* Vérifier la dépendance entre les différentes données chiffrées pour savoir
* si on peut ou non désactiver une donnée
*/
trait ChiffresDependances
{
  use LitJson;

  function listeNumParam(Chiffre $chiffre)
  {
  }
}

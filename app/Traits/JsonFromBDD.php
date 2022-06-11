<?php
namespace App\Traits;

/**
 * Destiné à transformer les infos issues d'un champs JSON de la base de
 * données
 */
trait JsonFromBDD
{
  /**
   * Prend en entrée un String json de bdd et renvoie un array
   * @param  String $champ valeur sous forme ""{\"... etc.}""
   * @return Array
   */
  function jsonFromBDD($champ)
  {
    // enlève les doubles quotes surnuméraire au début
    $champ = str_replace('"{', '{', $champ);
    // et à la fin du Json
    $champ = str_replace('}"', '}', $champ);
    // Elimine les antislash
    $champ = str_replace('\\', '', $champ);
    // transforme le string en array
    $tableau = json_decode($champ);

    return $tableau;

  }
}

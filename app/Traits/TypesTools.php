<?php
namespace App\Traits;

use App\Models\Type;

/**
 * Forunit des informations sur le type d'alerte en fonction d'un id ou d'un nom
 */
trait TypesTools
{
  /**
   * Test si la variable est un id ou un nom de Type
   * @param  [type]  $var
   * @return boolean     true si c'est un id ou un nom de type
   */
  function isType($var)
  {
      if ( Type::find($var) != null ) {

        $isType = true;

      }

      elseif ( Type::where('nom', $var)->first() != null ) {

        $isType = true;

      }

      else {

        $isType = false;

      }


    return $isType;

  }

  /**
   * Test si la variable est 1 ou liste
   * @param  [type]  $var
   * @return boolean 
   */
  public function isListe($var)
  {

    $var = trim(mb_strtolower($var));

    if ( $this->isType($var) && ( $var == "liste" || $var == 1 )) {

      return true;

    } else {

      return false;

    }

  }
}

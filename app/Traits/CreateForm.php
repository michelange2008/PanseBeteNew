<?php
namespace App\Traits;

use DB;
use App\Traits\LitJson;
/**
 * Destiné à renvoyé la liste des éléments pour une formulaire create
 */
trait CreateForm
{
  use LitJson;

  function createForm($json)
  {
    $elements = $this->litJson('createAlerte.json');

    foreach ($elements->liste as $element) {

      if(isset($element->table)) {

        $options = DB::table($element->table)->get();

        $element->options = $options;

      }
    }

    return $elements;

  }
}

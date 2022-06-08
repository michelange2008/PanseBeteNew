<?php
namespace App\Traits;

use DB;
use App\Traits\LitJson;
/**
 * Destiné à renvoyer la liste des éléments pour un formulaire create ou edit
 *
 */
trait FormTemplate
{
  use LitJson;

  /**
   * Appelée par createForm ou editForm
   *
   * Lit le json (identique pour edit et create) correspondant au model
   * Y ajoute les éléments des listes déroulantes, c'est-a-dire les models
   * liés par une clef étrangère (espece_id, theme_id, etc).
   * @param json eléments du formulaire
   * @return object liste structurée du formulaire avec éléments des listes déroulantes
   */
  function prepareForm($json)
  {
    $elements = $this->litJson($json);

    // Ajoute la liste d'options quand il s'agit d'un champs select
    foreach ($elements->liste as $element) {

      if(isset($element->table)) {

        $options = DB::table($element->table)->get();

        $element->options = $options;

      }

      elseif (isset($element->liste)) {
        $liste = $this->litJson($element->liste);
dd($liste);
        $elements->options = $liste;
      }
    }

    return $elements;

  }

  /**
   * Destiné à produire les informations pour l'affichage d'un formulaire
   * CREATE d'un model quelconque
   * Utilise la fonction prepareForm
   *
   * Y rajoute les informations sur le titre et l'icone du titre
   *
   * @param json même fichier que précédemment
   * @return object idem mais avec les infos titre en plus
   */
  public function createForm($json, $route_suffixe = 'store', $soustitre = null)
  {
    $elements = $this->prepareForm($json);

    $elements->route = route($elements->prefixe.'.'.$route_suffixe);

    $elements->titre->icone = "plus.svg";

    $elements->titre->titre = $elements->prefixe."_create";

    if($soustitre != null) {

      $elements->titre->soustitre = $soustitre;

    }

    $elements->method = "POST";

    return $elements;
  }


  /**
   * Destiné à produire les informations pour l'affichage d'un model EDIT d'un
   * model quelconque.
   * Utilise la fonction prepareForm
   *
   * Y rajoute les informations sur le titre et l'icone du titre
   * Rajoute aussi une clef isOption qui permet d'indiquer dans le formulaire
   * edit les valeurs actuelles du model.
   *
   * @param json même fichier que précédemment
   * @return object idem mais avec les infos titre et les valeurs en plus
   */
  public function editForm($model, $json, $route_suffixe = 'update')
  {
    $elements = $this->prepareForm($json);

    $elements->titre->icone = "edit.svg";

    $elements->titre->titre = $elements->prefixe."_edit";

    $elements->method = "PUT";

    $elements->route = route($elements->prefixe.'.'.$route_suffixe, $model->id);

    foreach ($elements->liste as $element => $details) {

      if (isset($details->table)) {

        $item = $details->name;

        $details->isName = $model->$item;

      } else {

        $details->isName = $model->$element;

      }
    }

    return $elements;
  }
}

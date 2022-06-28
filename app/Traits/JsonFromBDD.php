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
    $tableau = json_decode($champ, JSON_UNESCAPED_UNICODE );

    return $tableau;

  }

  /**
   * transforme un json en texte avec un séparateur précis
   *
   * @param String voir description dans jsonFromBDD()
   * @return String éléments du json avec un séparteur
   */
  public function jsonTabToString($champ, $sep =" - ")
  {
    // On crée une variable vide qui va recevoir le texte
    $texte = '';
    // On met en forme le texte à condition qu'il ne soit pas vide
    if($champ != null) {

      // Si le stockage du json est étrange avec plein de ""
      // et \\ il faut le caster en array avant
      if (gettype($champ) == "string") {
        // On utilise la méthode ci-dessus
        $tableau = $this->jsonFromBDD($champ);
        // Si ce stockage est normal, Laravel cast directement
      } else {

        $tableau = $champ;
      }
      // On parcourt le tableau
      foreach ($tableau as $el) {
        // On ajoute le séparateur
        $texte = $texte.$sep.$el;

      }
      // On enlève le 1er séparateur et les espaces inutiles
      $texte = trim(substr(trim($texte), 1));

    }

    return $texte;

  }

  /**
   * Tansforme un string avec virgule comme séparateur
   * en string prêt pour être stocké sous forme de json
   *
   * @param String $texte texte avec un séparateur
   * @param String $ep séparateur des mots
   * @return String sous forme stockable en BBD json
   */
  public function stringToJson($texte, $sep = ",")
  {
    // On crée un tableau avec la fonctione explode et le sep
    $liste = explode($sep, $texte);
    // Tableau vide que recevra la tableau modifié
    $listeTab = [];
    // On parcourt le tableau d'origine
    foreach ($liste as $key => $value) {
      // Et on remplit la tableau final en en faisant un
      // tableau associatif dont les clefs commencent à 1
      $listeTab[strval($key + 1)] = $value;

    }
    // On transforme ca en json et on le renvoie
    return json_encode($listeTab);

  }
}

<?php
namespace App\Http\Indicateurs;

/**
 * Classe abstraite pour le calcul des indicateurs (mortalités, ...) et leur stockage
 * dans le bdd sindicateurs.
 * On utilise les classes filles de type IndicateursVL selon l'espèce.
 * C'est le trait ChoixIndicateur qui fait appel à la classe propre à l'espèce
 */
abstract class Indicateurs
{

  protected $chiffres;
  protected $indicateurs;
  protected $saisie_id;

  public function __construct($saisie_id, $chiffres)
  {
    $this->saisie_id = $saisie_id;
    $this->chiffres = $chiffres;
    $this->indicateurs = Collect();
  }

  public function synthese() {}

  public function getChiffres()
  {
    return $this->chiffres;
  }

  public function getIndicateurs()
  {
    return $this->indicateurs;
  }

}

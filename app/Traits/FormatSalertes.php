<?php
namespace App\Traits;

use App\Models\Alerte;
use App\Models\Critalerte;

/**
 * Ajoute aux salertes les normes avec un formattage pour l'affichage
 * Remplace dans la colonne valeur pour les alertes de liste les indices issus
 * de critalerte par les intitulés
 */
trait FormatSalertes
{
  // Fonction principale qui reçoit une collection de salertes et renvoie cette
  // collection modifiée
  function formatSalertes($salertes)
  {
    foreach ($salertes as $salerte) {
      // Si c'est une alerte de type liste, on modifier l'intitulé de la valeur
      if($salerte->alerte->type === "liste") {

        $salerte = $this->valeurListe($salerte);

      }

      // Puis on ajoute une propriété norme avec une mise en forme pour l'affichage
      $salerte = $this->format($salerte);

    }
    return $salertes;
  }

  /**
   * Ajoute une propiété norme destinée à l'affichage
   * (par ex: "entre 15 et 25%")
   *
   * @param type $salerte alerte initiale
   * @return return $formatSalerte alerte formatée avec les normes affichables
   */
  public function format($salerte)
  {

      $borne_inf = $salerte->alerte->borne_inf;
      $borne_sup = $salerte->alerte->borne_sup;
      $unite = $salerte->alerte->unite;

      // Si aucune borne n'est nulle, c'est
      if ($borne_inf !== null && $borne_sup !== null) {
        // soit une valeur précise si les deux bornes sont identiques
        if($borne_inf == $borne_sup) {

          $norme = $borne_inf." ".$unite;
        // Soit un intervalle si elle sont différentes
        } else {

          $norme = "de ".$borne_inf." ".$unite." à ".$borne_sup." ".$unite;

        }
      // Si la borne_inf est nulle c'est qu'il ne faut pas dépasser la borne_sup
      } elseif ($borne_inf === null && $borne_sup !== null) {

        $norme = "< ".$borne_sup." ".$unite;
      // Si la borne_sup est nulle, c'est qu'il faut être au desus de la borne_inf
      } elseif ($borne_inf !== null && $borne_sup === null) {

        $norme = "> ".$borne_inf." ".$unite;
      // SI les deux bornes sont nulles on ne met rien (cas de salerte de liste)
      } else {

        $norme = "";

      }

      $salerte->norme = $norme;

      return $salerte;

}

  /**
   * Pour une valeur de type liste, remplace l'indice par l'intitulé
   *
   * ex: valeur = 1 pour "hétérogénéité des l'EC des vaches" remplacé par "oui"
   *
   * @param type $salerte
   * @return return $valeurListeSalerte
   */
  public function valeurListe($salerte)
  {

      try {

        $criteres = Critalerte::where('alerte_id', $salerte->alerte_id)->get();

        foreach ($criteres as $critere) {

          if ($critere->valeur == $salerte->valeur) {

            $salerte->valeur = $critere->nom;

          }
        }

      } catch (\ErrorException $e) {

        dd($e."| critères: $salerte");

      }

    return $salerte;

  }

}

<?php
namespace App\Fournisseurs;

use App\Fournisseurs\ListeFournisseur;


/**
 * FOURNIT UNE LISTE DES ANIMAUX POUR LA VUE TABLEAU INDEX
 *
 */
class ListeChiffresFournisseur extends ListeFournisseur
{


    public function creeListe($chiffres)
    {

      $this->liste = collect();

      foreach ($chiffres as $chiffre) {

        $description = [];

        $nom = $this->lienFactory( $chiffre->id, $chiffre->nom, 'chiffre.edit', 'affiche_chiffre' );

        $groupe = $this->itemFactory( $chiffre->groupe );

        $suppr = $this->delFactory($chiffre->id, 'chiffre.destroy');

        $description = [
          $groupe,
          $nom,
          $suppr,
        ];

        $this->liste->put( $chiffre->id , $description );

      }

      return $this->liste;

    }

}

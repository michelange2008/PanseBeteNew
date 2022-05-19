<?php
namespace App\Fournisseurs;

use App\Traits\LitJson;

/**
 * CLASSE ABSTRAITE POUR LES TRAITS LISTE****FOURNISSEUR
 */
abstract class ListeFournisseur
{
  use LitJson;

  private $datas;

  private $liste;
  /*
  * Renvoie une collection avec toutes les infos pour afficher
  * un tableau: titre, icone, intitulés, liste
  */

  public function renvoieDatas($liste_origine, $titre, $fichier_intitules, $icone = 'default.svg', $addRoute = null, $addTitre = null) {

    $this->datas = collect();

    $this->datas->titre = $titre; // TITRE DU TABLEAU

    $this->datas->icone = $icone; // ICONE DE L'UTILISATEUR

    $this->datas->intitules = $this->litJson($fichier_intitules); // EN TETE DES COLONNES

    $this->datas->liste = $this->creeListe($liste_origine); // LIGNES DU TABLEAU
    
    $add = collect();

    $add->route = $addRoute;

    $add->titre = $addTitre;

    $this->datas->add = $add;

    return $this->datas;
  }

  /*
  * Renvoie un tableau $liste avec toutes les lignes à afficher
  */
  abstract protected function creeListe($liste);

  /*
  * Crée les items de la liste à afficher renvoyer par la méthode liste
  */
  public function itemFactory($nom)
  {
    $item = collect();

    $item->action = null;

    $item->id = $nom;

    $item->nom = $nom;

    return $item;
  }

  public function dateFactory($nom)
  {
    $item = collect();

    $item->action = 'date';

    $item->id = $nom;

    $item->nom = $nom;

    return $item;
  }

  public function iconeFactory($icone)
  {
    $item = collect();

    $item->action = 'icone';

    $item->id = $icone->nom;

    $item->nom = $icone->nom;

    $item->route = null;

    return $item;
   }


   public function photoFactory($photo)
   {
     $item = collect();

     $item->action = 'photo';

     $item->id = $photo;

     $item->nom = $photo;

     $item->route = null;

     return $item;
   }

   public function lienFactory($id, $nom, $route, $tooltip, $icone = '<i class="text-secondary fas fa-eye"></i>')
   {
     $item = collect();

     $item->action = 'lien';

     $item->id = $id;

     $item->nom = $nom;

     $item->route = $route;

     $item->tooltip = __('tooltips.'.$tooltip);

     $item->icone = $icone;

     return $item;
   }

   public function ouinonFactory($id, $nom)
   {
     $item = collect();

     $item->action = 'ouinon';

     $item->id = $id;

     $item->nom = $nom;

     return $item;
   }

   public function modifierFactory($id, $route)
   {
     $item = collect();

     $item->action = 'modifier';

     $item->id = $id;

     $item->route = $route;

     return $item;
   }


   public function delFactory($id, $route)
   {
     $item = collect();

     $item->action = 'del';

     $item->id = $id;

     $item->route = $route;

     $item->titre = 'boutons.del';

     $item->texte = 'commun.question_del';

     return $item;
   }

}

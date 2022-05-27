<?php
namespace App\Fournisseurs;
use Illuminate\Support\Facades\Route;

use App\Traits\LitJson;
use App\Comp\Titre;

/**
 * Fournit les données mises en forme pour l'affichage d'un tableau
 * La structure du json qui apporte les infos sur le titre, le bouton, Les
 * colonnes, ... doit suivre une syntaxe précise.
 * Il en est de même avec les fichier lang/tableaux.php qui doit comporter un
 * item titre_liste_{prefixe} et create_{prefixe} pour le titre et le nom du bouton
 */
class TabLab extends Tab
{
  use LitJson;

  protected $indexTab;

  function __construct($datas, $json, $icone)
  {
    // On initialise le tableau
    $this->indexTab = collect();
    // On récupère les infos de colonne à partir du json
    $cadre = $this->litJson($json);
    // On crée le titre
    try {

      $icone = $cadre->icone;

    } catch (\Exception $e) {

    }

    $titre = new Titre($icone, 'titre_liste_'.$cadre->prefixe);
    $this->indexTab->titre = $titre;
    // Avec la méthode creeEntetes on crée la collection d'en-têtes
    $this->creeEntetes($cadre);
    // Avec la méthode creeLignes on remplit le tableau de données sous la forme idoine
    $this->creeLignes($cadre, $datas);
    // Ajoute un bouton "ajout d'un nouvel élément"
    $this->addBouton($cadre);
  }

  public function get()
  {
    return $this->indexTab;
  }

  /**
   * Ajoute un une collection bouton pour l'ajout d'un nouvel élément
   */
  public function addBouton($cadre)
  {
    $this->indexTab->bouton = collect();
    // On vérifier l'existe de la route nommée avec le préfixe
    if(Route::has($cadre->prefixe.'.create')) {
      // si elle existe on l'ajoute à tableau->bouton
      $this->indexTab->bouton->route = $cadre->prefixe.'.create';

    } else {

      dd("la route ".$cadre->prefixe.'.create n\'existe pas');

    }
    //
    $this->indexTab->bouton->libelle = 'create_'.$cadre->prefixe;
  }

  /**
   *
   * Crée les entetes du tableau à afficher
   *
   */
  public function creeEntetes($cadre)
  {
    // On intialise une collection entetes dans le tableau
    $this->indexTab->entetes = collect();
    // On parcours le json (partie "colonnes")
    foreach ($cadre->colonnes as $colonne) {
        // Et à chaque fois on crée une en-tête
        $entete = collect();
        // Avec le nom
        $entete->nom = $colonne->col;
        // Les données d'alignement
        $entete->aligne = $colonne->aligne;
        // Le fait que ce soit une colonne triable ou non
        $entete->sortable = $colonne->sortable;
        // Et on l'ajoute à la liste des en-têtes
        $this->indexTab->entetes->push($entete);
    }
    if ($cadre->suppr) {

      $entete = collect();
      $entete->nom = 'del';
      $entete->aligne = 'center';
      $entete->sortable = false;
      $this->indexTab->entetes->push($entete);
    }
  }

  /**
   *
   * définit les lignes du tableau
   *
   */
  public function creeLignes($cadre, $datas)
  {
    // On initialise une collection lignes qui recevra toutes les infos sur les lignes
    $this->indexTab->lignes = collect();
    // On parcours chaque ligne de la table alerte
    foreach ($datas as $data) {
      // On initialise une collection pour la ligne
      $ligne = collect();
      $id = $data->id;
      foreach ($data as $key => $value) {
        if(isset($cadre->colonnes->$key)) {

        $colonne = $cadre->colonnes->$key;
          // Et dans chaque cas on appelle une méthode de Tab.php en fonction de
          // la variable type qui permet de créer un item formatté selon le type
          switch ($colonne->type) {
            case 'date' :
            $item = $this->dateFactory($id, $value);
            break;

            case 'icone' :

            try {

              $item = $this->iconeFactory($id, $value);

            } catch (\Exception $e) {
              dump("Problème avec l'utilisation d'iconeFactory:
              pas de variable icone définie");
              dump($colonne);
              dd($e);
            }

            break;

            case 'photo':
            try {

              $item = $this->photoFactory($id, $value);

            } catch (\Exception $e) {
              dump("Problème avec l'utilisation de photoFactory:
              pas de variable photo définie");
              dump($colonne);
              dd($e);
            }

            break;

            case 'lien' :
            try {

              $item = $this->lienFactory($value, $colonne->route);

            } catch (\Exception $e) {
              dump("Problème avec l'utilisation de lienFactory:
              pas de variable route définie");
              dump($colonne);
              dd($e);
            }

            break;

            case 'ouinon' :
            $item = $this->ouinonFactory($id, $value);
            break;

            case 'modifier':
            try {

              $item = $this->modifierFactory($id, $value, $cadre->prefixe);

            } catch (\Exception $e) {
              dump("Problème avec l'utilisation de lienFactory:
              pas de variable route définie");
              dump($colonne);
              dd($e);
            }

            break;

            default:
            $item = $this->itemFactory($id, $value);
            break;
          }
          // Puis on ajoute l'item ainsi créée à la ligne
          $ligne->push($item);

        }

      }
      // On pourcours le json (sous partie colonnes)
      // S'il faut une colonne suppr, on l'ajoute
      if($cadre->suppr ) {
        // Mais on n'ajoute un lien de suppression seulement si il existe une
        // variable supprimable à true
        $supprimable = (isset($data->supprimable)) ? $data->supprimable : false;

        if ($supprimable) {

          $item = $this->delFactory($data->id, $cadre->prefixe);

        } else {

          $item = $this->itemFactory($data->id, '-');

        }
        $ligne->push($item);

      }
      // Et enfin on ajoute la ligne à la collection de lignes
      $this->indexTab->lignes->push($ligne);

    }

  }

}

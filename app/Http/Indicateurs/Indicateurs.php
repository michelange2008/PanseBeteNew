<?php
namespace App\Http\Indicateurs;

use DB;
use App\Models\Alerte;
use App\Models\Salerte;

/**
* Classe  pour le calcul des indicateurs (mortalités, ...) et leur stockage
* dans le bdd salertes.
*/
class Indicateurs
{

  protected Array $chiffres; // données saisies
  protected String $saisie_id; // Id de la saisie
  protected Object $parametres; // Lecture du fichier de paramètres en lien avec l'espèce
  protected $indicateurs;
  protected $erreurs;

  public function __construct(String $saisie_id, Array $chiffres, Object $parametres)
  {
    $this->saisie_id = $saisie_id;
    $this->chiffres = $chiffres;
    $this->parametres = $parametres;
    $this->indicateurs = collect();
    $this->erreurs = collect();
  }

  function calculIndicateurs()
  {

    foreach ($this->parametres as $parametre) {

      // Cas des paramètres exprimés en % et résultat d'une division
      if($parametre->type == "pourcentage") {
        // On lève une exception en cas de division par 0

        if($this->chiffres[$parametre->denom] != 0) {

          $indicateur = round(100 * $this->chiffres[$parametre->id] / $this->chiffres[$parametre->denom], $parametre->round);

        } else {
          // On recherche l'intitule du dénominateur nul pour l'inscrire dans $erreurs
          $libelle_erreur = "Attention";
          foreach ($this->parametres as $abbr => $param) {
            if($abbr == $parametre->denom) {
              $libelle_erreur = $param->libelle;
            }
          }
          // Et on inscrit l'erreur
          $this->setErreurs($libelle_erreur, "messages.param_nul");

        }
        $this->indicateurs->put($parametre->id, $indicateur);

        // Si un indicateur est supérieur à 100% on ajoute l'info dans le message d'erreur
        if ($indicateur > 100) {
          // On inscrit l'erreur
          $this->setErreurs($parametre->libelle.' = '.$indicateur."%", "messages.indicateur_sup_100");

        }

      } elseif ($parametre->type == 'calcule') {

        // On lève une exception en cas de division par 0
        try {

          $indicateur = round($this->chiffres[$parametre->id] / $this->chiffres[$parametre->denom], $parametre->round);

        } catch (\Exception $e) {
          // Et on inscrit l'erreur
          $this->setErreurs($parametre->libelle, "messages.param_nul");

        }
        $this->indicateurs->put($parametre->id, $indicateur);

        // Pour les indicateurs sans calcul (taux urée, nb cellules, etc.) on stocke
        // directement la valeur dans la bdd
      } elseif ($parametre->type == 'numerique') {

        $this->indicateurs->put($parametre->id, $this->chiffres[$parametre->id]);

      }
    }
    // Et on stocke les résultats
    $this->store();
  }

  /*
  // Permet de récupérer les erreurs stockées
  */
  public function getErreurs()
  {
    return $this->erreurs;
  }

  /*
  // Stocke les erreurs
  */
  public function setErreurs($paramindic, $message)
  {

    $this->erreurs->put($paramindic, $message);
  }

  /*
  // Stocke les indicateurs calculés dans les table sindicateurs
  */
  public function store()
  {
    foreach ($this->indicateurs as $abbr => $valeur) {
      try {

        $alerte_id = Alerte::where('abbr', $abbr)->first()->id;

      } catch (\Exception $e) {

        dd("L'erreur vient de l'abbréviation suivante: ".$abbr);
      }

      Salerte::updateOrCreate(
      ['saisie_id' => $this->saisie_id, 'alerte_id' => $alerte_id],
      ['valeur' => $valeur]
      );
    }
  }
}

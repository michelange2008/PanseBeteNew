<?php

namespace App\Traits;

use DB;

use App\Models\Saisie;
use App\Models\Alerte;
use App\Models\Salerte;
use App\Models\Numalerte;

use App\Traits\CreeAlerte;
/**
 * A partir d'une saisie chiffrée il s'agit de calculer les valeurs à mettre
 * dans svaleurs
 */
class CalculeIndicateurs
{
  use CreeAlerte, TypesTools;

  protected Array $chiffres; // données saisies
  protected String $saisie; // saisie en cours
  protected $indicateurs;
  protected $erreurs;

  public function __construct(Saisie $saisie, Array $chiffres)
  {
    $this->saisie = $saisie;
    $this->chiffres = $chiffres;
    $this->indicateurs = collect();
    $this->erreurs = collect();
  }


  function calcule()
  {
      $numalertes = DB::table('numalertes')
            ->join('alertes', 'alertes.id', 'numalertes.alerte_id')
            ->where('alertes.espece_id', $this->saisie->espece_id)
            ->get();

      foreach ($numalertes as $numalerte) {

        $alerte = Alerte::find($numalerte->alerte_id);

        if($this->isPourcentage($numalerte->type_id)) { // pourcentage

          if ($this->chiffres['C'.$numalerte->denom_id] != 0) {

            $valeur = intval(
              round(
                100 * $this->chiffres['C'.$numalerte->num_id]/
                $this->chiffres['C'.$numalerte->denom_id], $numalerte->round
              )
            );

            // Si un indicateur est supérieur à 100% on ajoute l'info dans le message d'erreur
            if ($valeur > 100) {

              $this->setErreurs(
                $numalerte->nom.
                ' = '.$valeur."%", "messages.indicateur_sup_100"
              );

            } else {
              // Sinon on évalue le danger et on inscrit tout ça dans la table salerte
              $danger = $this->creeAlerte($alerte, $valeur);

              Salerte::updateOrCreate(
                ['alerte_id' => $numalerte->alerte_id, 'saisie_id' => $this->saisie->id],
                ['valeur' => $valeur , 'danger' => $danger]
              );

            }

          } else { // Cas où un chiffre destiné à être dénominateur est nul ->message d'erreur

            // Et on inscrit l'erreur
            $this->setErreurs->put($numalerte, "messages.param_nul");

          }

        } elseif ($this->isRatio($numalerte->type_id)) { // ratio

          if ($this->chiffres['C'.$numalerte->denom_id] != 0) {

            $valeur = intval(
              round(
                $this->chiffres['C'.$numalerte->num_id]/
                $this->chiffres['C'.$numalerte->denom_id], $numalerte->round
              )
            );

            $danger = $this->creeAlerte($alerte, $valeur);

            Salerte::updateOrCreate(
              ['alerte_id' => $numalerte->alerte_id, 'saisie_id' => $this->saisie->id],
              ['valeur' => $valeur , 'danger' => $danger]
            );

          } else { // Cas où un chiffre destiné à être dénominateur est nul ->message d'erreur

            // Et on inscrit l'erreur
            $this->setErreurs->put($numalerte, "messages.param_nul");

          }

        } elseif ($this->isEntier($numalerte->type_id)) {

          $valeur = intval($this->chiffres['C'.$numalerte->num_id]);

          $danger = $this->creeAlerte($alerte, $valeur);

          Salerte::updateOrCreate(
            ['alerte_id' => $numalerte->alerte_id, 'saisie_id' => $this->saisie->id],
            ['valeur' => $valeur , 'danger' => $danger]
          );


        } elseif($this->isDecimal($numalerte->type_id)) {

          $valeur = round(
            floatval($this->chiffres['C'.$numalerte->num_id]), $numalerte->round
          );

          $danger = $this->creeAlerte($alerte, $valeur);

          Salerte::updateOrCreate(
            ['alerte_id' => $numalerte->alerte_id, 'saisie_id' => $this->saisie->id],
            ['valeur' => $valeur , 'danger' => $danger]
          );

        } elseif($this->isListe($numalerte->type_id)) {

        } else {

          $this->setErreurs($numalerte, "Y a un problème dans la nature du paramètre");

        }
      }

  }

  /*
  // Stocke les erreurs
  */
  public function setErreurs(Numalerte $numalerte, String $message)
  {

    $this->erreurs->put($numalerte->nom, $message);
  }

}

<?php
namespace App\Http\Indicateurs;

use App\Models\Chiffre;
use App\Models\Alerte;
use DB;
use Log;
/**
 * Calcul des indicateurs pour vaches laitières
 * appelé par le trait principal calculIndicateurs
 */
class IndicateursVL extends Indicateurs
{

  function synthese()
  {
    $this->mort_vaches();
    $this->mort_NV();
    $this->renouvellement();
    $this->non_del();
    $this->frais_veto();
    $this->premier_velage();

  }

  /**
   * Validation de la saisie des chiffres
   * Pour vérifier qu'il n'y a pas de choses incohérentes
   * @param type var Description
   * @return return type
   */
  public function validation()
  {
    $messages = Collect();
    if ($this->chiffres['nb_vaches'] < 1 || $this->chiffres['nb_genisses_NS'] == 0 || $this->chiffres['nb_genisses_SV'] == 0) {
      $messages->push("L'effectif animal ne peut pas être nul");
    }
    if($this->chiffres['vaches_mortes'] > $this->chiffres['nb_vaches']) {
      $messages->push("Il ne peut pas y avoir plus de vaches mortes qu'il y a de vaches");
    }

    return $messages;
  }

  /**
   * calcul de le taux de mortalité des vaches laitières
   */
  public function mort_vaches()
  {
    $indicateur = round(100 * $this->chiffres['vaches_mortes'] / $this->chiffres['nb_vaches'], 1);

    $this->store('mort_vaches', $indicateur);
  }

  public function mort_NV()
  {
    $indicateur = round(
      100 * ($this->chiffres['genisses_NS_mortes'] + $this->chiffres['genisses_SV_mortes']) /
       ($this->chiffres['nb_genisses_NS'] + $this->chiffres['nb_genisses_SV']), 1);

       $this->store('mort_NV', $indicateur);
  }

  public function renouvellement()
  {
    $indicateur = round(100 * $this->chiffres['nb_reformes'] / $this->chiffres['nb_vaches'], 1);

    $this->store('renouvellement', $indicateur);
  }

  public function frais_veto()
  {
    $frais_veto = round($this->chiffres['frais_veto'] / $this->chiffres['nb_vaches'], 0);

    $this->store('frais_veto', $frais_veto);
  }

  public function premier_velage()
  {
    $this->store('premier_velage', $this->chiffres['premier_velage']);
  }

  public function vel_genisses_diff()
  {
    $vel_genisses_diff = round( $this->chiffres['vel_genisses_diff'] / $this->chiffres['nb_velages_genisses'], 1);

    $this->store('vel_genisses_diff', $vel_genisses_diff);
  }

  public function non_del()
  {
    $indicateur = round(100 * $this->chiffres['non_del'] / $this->chiffres ['nb_velages']);

    $this->store('non_del', $indicateur);
  }

  public function store($alerte_abbr, $indicateur)
  {
    $alerte_id = Alerte::where('abbr', $alerte_abbr)->first()->id;

    DB::table('sindicateurs')
      ->updateOrInsert(
      ['saisie_id' => $this->saisie_id, 'alerte_id' => $alerte_id],
      ['indicateur' => $indicateur]
    );
  }
}

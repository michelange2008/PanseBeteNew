<?php
namespace App\Traits;

use DB;
use App\Models\Theme;
use App\Models\Alerte;

/**
 * Outils de manipulation des thèmes
 * à partir d'une liste d'alertes ou de salertes
 */
trait ThemesTools
{
  function alertesThemes($alertes)
  {
    // On crée une collection vide
    $usedThemes = collect();
    // Qu'on remplit avec les id des thèmes présents dans $alertes
    foreach ($alertes as $alerte) {

      $usedThemes->push($alerte->theme->id);

    }
    // On enlève les doublons et on transforme la collection en array
    $usedThemes = $usedThemes->unique()->toArray();
    // On recherche les thèmes correspondants aux id dans l'array créé
    $themes = Theme::find($usedThemes);

    return $themes;
  }
  /*
  // Renvoie la liste des thèmes en ayant enlevé ceux qui ne concernent pas une espèce
  */
  function themesEspece($espece_id)
  {
    $alertesEspece = Alerte::select('theme_id')->where('espece_id', $espece_id)->groupBy('theme_id')->get();

    foreach ($alertesEspece as $alerte) {
      $themes_id[] = $alerte->theme_id;
    }
    $themesEspece = Theme::find($themes_id);

    return $themesEspece;

  }


  /**
   * Rajoute à la liste des thèmes le nombre de salertes avec danger = true
   *
   * @param type $saisie_id
   * @return return collection de thèmes
   */
  public function themesEspeceAvecDanger($saisie_id, $espece_id)
  {
    $themes = $this->themesEspece($espece_id);
    // On récupère toute la liste des salertes de la saisie et qui ont danger = true
    // avec en plus l'id des thèmes
    $themesAvecDanger = DB::table('salertes')
                ->select('themes.id as themeId', 'salertes.danger')
                ->join('alertes', 'salertes.alerte_id', 'alertes.id')
                ->join('themes', 'themes.id', 'alertes.theme_id')
                ->where('salertes.saisie_id', $saisie_id)
                ->where('salertes.danger', true)
                ->get();
    // On groupe par thème puis on mappe pour compter les nombre de salertes de chaque thème
    $themesCountSalertes = $themesAvecDanger->groupBy('themeId')->map(function ($item, $key) {
      return [
        'themeId' => $item[0]->themeId,
        'nb_salertes' => $item->count()
      ];
    });
    // Gros encastrement de boucles hideuses mais je ne sais pas comment faire autrement
    // On ajoute à la liste complète des thèmes un attribut nb_salertes initié à 0
    // et modifier si il y a un nombre différent de salertes dans $themesCountSalertes
    foreach ($themes as $theme) {

      $theme->nb_salertes = 0;

      foreach ($themesCountSalertes as $themeCountSalertes) {

        if ($themeCountSalertes['themeId'] == $theme->id) {

          $theme->nb_salertes = $themeCountSalertes['nb_salertes'];

        }

      }

    }

    return $themes;

  }
}

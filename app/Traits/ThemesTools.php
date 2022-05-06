<?php
namespace App\Traits;

use App\Models\Theme;

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
}

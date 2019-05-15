<?php
namespace App\Traits;

use App\Models\Alerte;
use App\Models\Theme;
use Carbon\Carbon;

trait ThemesAvecAlerte
{

    public function themesAvecAlerte($saisie)
    {
      $themes_utilises = Alerte::select('theme_id')->where('espece_id', $saisie->espece_id)->groupBy('theme_id')->get();

      foreach ($themes_utilises as $alerte) {
        $liste_themes_utilises[] = $alerte->theme_id;
      }
      $themes_avec_alerte = Theme::find($liste_themes_utilises);

      return $themes_avec_alerte;
    }

}

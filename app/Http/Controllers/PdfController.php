<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saisie;
use App\Models\Theme;
use App\Models\Categorie;
use App\Models\Espece;
use App\Models\Chiffre;
use PDF;

use App\Traits\CategoriesTools;
use App\Traits\ThemesTools;

class PdfController extends Controller
{
  use CategoriesTools, ThemesTools;
    /**
     * Fournit un pdf avec une grille vide pour saisir les données chiffrées
     *
     * @return return pdf
     */
  public function modele(Espece $espece)
    {
      $chiffres = $espece->chiffres()
        ->orderBy('groupe_id')
        ->orderBy('id')
        ->get()
        ->groupBy('groupe_id');

        $pdf = PDF::loadView('pdf.modele', [
          'chiffres' => $chiffres,
          'espece' => $espece,
        ]);

        $nomFichier = "Parametres ( ".$espece->nom." ).pdf";

        return $pdf->stream($nomFichier);

    }
    public function saisie(Saisie $saisie)
    {
      $categoriesAvecOrigines = $this->categoriesAvecOrigines($saisie);

      $themes = Theme::all();

      $themesIdAvecAlerte = $this->themesIdAvecAlerte($saisie);

      foreach ($themes as $theme) {

      }

dd('');
      $pdf = PDF::loadView('pdf.pdfSaisie', [
        'saisie' => $saisie,
        'themes' => Theme::all(),
        'themesIdAvecAlerte' => $themesIdAvecAlerte,
        'categories' => $categoriesAvecOrigines,
      ]);
      $nomFichier = $saisie->elevage->nom."_".$saisie->espece->nom."_".$saisie->updated_at.".pdf";

      return $pdf->stream($nomFichier);

    }
}

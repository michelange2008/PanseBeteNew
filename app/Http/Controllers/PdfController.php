<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saisie;
use App\Models\Theme;
use App\Models\Categorie;
use App\Models\Espece;
use App\Models\Chiffre;
use App\Models\Salerte;
use PDF;

use App\Traits\CategoriesTools;
use App\Traits\ThemesTools;
use App\Traits\FormatSalertes;

class PdfController extends Controller
{
  use CategoriesTools, ThemesTools, FormatSalertes;
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
      $salertes = Salerte::where('saisie_id', $saisie->id)->get();
      $salertes = $this->formatSalertes($salertes);
      // Utilisation du trait CategoriesTools pour avoir les catégories pour
      // lesquelles il y a une origine.
      $categoriesAvecOrigines = $this->categoriesAvecOrigines($saisie);
      // Utilisation du trait ThemesTools pour ajouter un attribut booleen salerte
      // au cous où il y a une ou des salertes pour un theme donné -> permet un
      // affichage spécifique dans le pdf
      $themesIdAvecAlerte = $this->themesIdAvecAlerte($saisie);

      $pdf = PDF::loadView('pdf.pdfSaisie', [
        'saisie' => $saisie,
        'salertes' => $salertes,
        'themesIdAvecAlerte' => $themesIdAvecAlerte,
        'categories' => $categoriesAvecOrigines,
      ]);
      $nomFichier = $saisie->elevage->nom."_".$saisie->espece->nom."_".$saisie->updated_at.".pdf";

      return $pdf->stream($nomFichier);

    }
}

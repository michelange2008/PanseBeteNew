<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saisie;
use App\Models\Theme;
use PDF;

class PdfController extends Controller
{


    public function index($saisie_id)
    {
      $pdf = PDF::loadView('lecture.pdfSaisie', [
        'saisie' => Saisie::findOrFail($saisie_id),
        'themes' => Theme::all(),
      ]);
      return $pdf->stream('essai.pdf');

    }
}

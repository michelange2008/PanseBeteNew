<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Saisie;
use App\Models\Theme;

class EssaiController extends Controller
{


    public function index()
    {

//       dd($liste);
      $pdf = PDF::loadView('lecture.pdfSaisie', [
        'saisie' => Saisie::find(38),
        'themes' => Theme::all(),
      ]);
      return $pdf->stream('essai.pdf');
    // return view('lecture.pdfSaisie', [
    //     'saisie' => Saisie::find(38),
    //     'themes' => Theme::all(),
    // ]);
    }
}

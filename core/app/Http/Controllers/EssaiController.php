<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\LitCsv;

class EssaiController extends Controller
{
    use LitCsv;

    public function index()
    {
      echo "<h5>Essai</h5>";


      $this->litCsv('alertesCSV.csv');
    }
}

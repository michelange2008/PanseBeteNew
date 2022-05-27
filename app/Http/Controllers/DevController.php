<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alerte;

class DevController extends Controller
{
    public function dev()
    {
      echo "page pour faire des choses dans la bdd";
    }
}

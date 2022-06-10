<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alerte;
use App\Models\User;
use App\Models\Paraferme;


class DevController extends Controller
{
    public function dev()
    {
      echo "page pour faire des choses dans la bdd";

      $user = User::first();
      $paraferme = Paraferme::where('type', 'liste')->first();

      // $paraferme->liste[5] = "Vieille étable";

      dump($paraferme->liste);
    }
}

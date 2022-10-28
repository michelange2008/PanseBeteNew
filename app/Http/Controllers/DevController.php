<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Alerte;
use App\Models\User;
use App\Models\Paraferme;
use App\Models\Chiffre;
use App\Models\Espece;



class DevController extends Controller
{
    public function dev()
    {
      echo "page pour faire des choses dans la bdd";

      $chiffres = Chiffre::all();
      $espece = Espece::find(2);

      foreach ($chiffres as $chiffre) {
        $espece->chiffres()->attach($chiffre->id);
      }

    }
}

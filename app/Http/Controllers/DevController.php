<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Alerte;
use App\Models\User;
use App\Models\Paraferme;


class DevController extends Controller
{
    public function dev()
    {
      echo "page pour faire des choses dans la bdd";

      $user = User::find(10);


      $tab = json_decode('{"1":"bggggb","2":"nhhhhhhhhhn"}');

      dump(json_encode($tab));


      Paraferme::updateOrCreate(
        ['nom' => 'Aimentation'],
        ['liste' => json_encode($tab, JSON_UNESCAPED_SLASHES)]
      );

    }
}

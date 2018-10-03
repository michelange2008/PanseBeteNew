<?php

namespace App\Traits;

trait LitCsv
{
  public static function litCsv($csv)
  {
      $csvAvecChemin = base_path('public/csv')."/".$csv;
    $ligne = 1;

    if(($fichier = fopen($csvAvecChemin, 'r')) !== FALSE)
    {
      $table;

      while(($data = fgetcsv($fichier,";")) !== FALSE)
      {
        
          $table[] = explode(";" , $data[0]);
      }
      $tableSansTitre = array_slice($table, 1);

      return $tableSansTitre;
      
    }




  }
}

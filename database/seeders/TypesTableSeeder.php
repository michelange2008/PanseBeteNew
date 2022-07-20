<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'liste',
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'ratio',
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'pourcentage',
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'valeur',
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EspecesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('especes')->delete();
        
        \DB::table('especes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nom' => 'vaches allaitantes',
                'icone' => 'VA.svg',
                'fini' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'nom' => 'vaches laitières',
                'icone' => 'VL.svg',
                'fini' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'nom' => 'chèvres laitières',
                'icone' => 'CP.svg',
                'fini' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'nom' => 'brebis allaitantes',
                'icone' => 'OA.svg',
                'fini' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'nom' => 'brebis laitières',
                'icone' => 'OL.svg',
                'fini' => 1,
            ),
        ));
        
        
    }
}
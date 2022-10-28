<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SaisiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('saisies')->delete();
        
        \DB::table('saisies')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 519,
                'elevage_id' => 390,
                'espece_id' => 2,
                'hasnum' => 1,
                'hasobs' => 0,
                'created_at' => '2022-07-20 13:52:40',
                'updated_at' => '2022-07-20 13:54:03',
            ),
        ));
        
        
    }
}
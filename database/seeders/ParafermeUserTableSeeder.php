<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParafermeUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('paraferme_user')->delete();
        
        \DB::table('paraferme_user')->insert(array (
            0 => 
            array (
                'user_id' => 2,
                'paraferme_id' => 3,
                'value' => '40',
            ),
            1 => 
            array (
                'user_id' => 519,
                'paraferme_id' => 3,
                'value' => '45',
            ),
            2 => 
            array (
                'user_id' => 519,
                'paraferme_id' => 24,
                'value' => 'tout herbe',
            ),
            3 => 
            array (
                'user_id' => 519,
                'paraferme_id' => 25,
                'value' => '2.1',
            ),
            4 => 
            array (
                'user_id' => 519,
                'paraferme_id' => 26,
                'value' => 'aire paillée',
            ),
        ));
        
        
    }
}
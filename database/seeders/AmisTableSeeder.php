<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AmisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('amis')->delete();
        
        \DB::table('amis')->insert(array (
            0 => 
            array (
                'id' => 24,
                'user_id' => 522,
                'ami_id' => 519,
            ),
            1 => 
            array (
                'id' => 27,
                'user_id' => 520,
                'ami_id' => 519,
            ),
            2 => 
            array (
                'id' => 33,
                'user_id' => 519,
                'ami_id' => 289,
            ),
            3 => 
            array (
                'id' => 34,
                'user_id' => 519,
                'ami_id' => 368,
            ),
            4 => 
            array (
                'id' => 35,
                'user_id' => 519,
                'ami_id' => 94,
            ),
            5 => 
            array (
                'id' => 36,
                'user_id' => 519,
                'ami_id' => 422,
            ),
            6 => 
            array (
                'id' => 37,
                'user_id' => 519,
                'ami_id' => 366,
            ),
        ));
        
        
    }
}
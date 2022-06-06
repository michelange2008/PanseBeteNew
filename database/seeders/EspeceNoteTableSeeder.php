<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EspeceNoteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('espece_note')->delete();
        
        \DB::table('espece_note')->insert(array (
            0 => 
            array (
                'espece_id' => 1,
                'note_id' => 1,
            ),
            1 => 
            array (
                'espece_id' => 3,
                'note_id' => 1,
            ),
            2 => 
            array (
                'espece_id' => 4,
                'note_id' => 1,
            ),
            3 => 
            array (
                'espece_id' => 5,
                'note_id' => 1,
            ),
        ));
        
        
    }
}
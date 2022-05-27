<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ModaliteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('modalites')->delete();

      DB::table('modalites')->insert([
        [ 'nom' => "observations", 'abbr' => 'OBS'],
        ['nom' => "paramètres numériques", 'abbr' => 'NUM'],
      ]);
    }
}

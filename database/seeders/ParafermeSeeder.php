<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParafermeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('parafermes')->delete();

      \DB::table('parafermes')->insert([
        [
          'nom' => 'sau',
          'type' => 'int',
          'unite' => "ha",
          'liste' => null,
        ],
        [
          'nom' => 'logement',
          'type' => 'liste',
          'unite' => null,
          'liste' => '{"1":"aire paillée","2":"logettes","3":"entravé"}',
        ]
      ]);
    }
}

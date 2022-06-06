<?php

namespace Database\Seeds;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('groupes')->delete();

      \DB::table('groupes')->insert(array (
          0 =>
          array (
              'id' => 1,
              'nom' => 'effectifs',
          ),
          1 =>
          array (
            'id' => 2,
            'nom' => 'mortalité',
          ),
          2 =>
          array (
              'id' => 3,
              'nom' => 'reproduction et post-partum',
          ),
          3 =>
          array (
              'id' => 4,
              'nom' => 'lait et mamelle',
          ),
          4 =>
          array (
              'id' => 5,
              'nom' => 'jeunes',
          ),
          5 =>
          array (
              'id' => 6,
              'nom' => 'pieds',
          ),
          6 =>
          array (
              'id' => 7,
              'nom' => 'parasitisme',
          ),
          7 =>
          array (
              'id' => 8,
              'nom' => 'divers',
          ),
      ));
    }
}

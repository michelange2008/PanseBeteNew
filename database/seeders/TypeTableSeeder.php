<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('types')->delete();

      DB::table('types')->insert([
        [ 'nom' => 'liste'],
        [ 'nom' => 'ratio'],
        [ 'nom' => 'pourcentage'],
        [ 'nom' => 'valeur'],
      ]);

    }
}

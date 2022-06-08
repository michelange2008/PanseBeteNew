<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('roles')->delete();

      \DB::table('roles')->insert([
        [
          'id' => 1,
          'nom' => 'admin',
          'icone' => 'roles/admin.svg',
        ],
        [
          'id' => 2,
          'nom' => 'tech',
          'icone' => 'roles/tech.svg',
        ],
        [
          'id' => 3,
          'nom' => 'base',
          'icone' => 'roles/base.svg',
        ],
      ]);
    }
}

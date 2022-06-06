<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

    // $this->call(UsersTableSeeder::class);
    // $this->call(ElevagesTableSeeder::class);
    // $this->call(EspecesTableSeeder::class);
    // $this->call(ThemesTableSeeder::class);
    // $this->call(ParticipantsTableSeeder::class);
    // $this->call(CategoriesTableSeeder::class);
    // $this->call(AlertesTableSeeder::class);
    // $this->call(CritalertesTableSeeder::class);
    // $this->call(NotesTableSeeder::class);
    // $this->call(OriginesTableSeeder::class);
    // $this->call(SaisiesTableSeeder::class);
    // $this->call(SalertesTableSeeder::class);
    // $this->call(SoriginesTableSeeder::class);
    // $this->call(EspeceNoteTableSeeder::class);
    // $this->call(EspeceParticipantTableSeeder::class);
    $this->call(GroupeSeeder::class);
    }
}

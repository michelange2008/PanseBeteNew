<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

    $this->call(CategoriesTableSeeder::class);
    $this->call(ParticipantsTableSeeder::class);
    $this->call(ModalitesTableSeeder::class);
    $this->call(GroupesTableSeeder::class);
    $this->call(ThemesTableSeeder::class);
    $this->call(RoleTableSeeder::class);
    $this->call(EspecesTableSeeder::class);
    $this->call(TypesTableSeeder::class);
    $this->call(ElevagesTableSeeder::class);
    $this->call(ParafermesTableSeeder::class);
    $this->call(AlertesTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(ChiffresTableSeeder::class);
    $this->call(CritalertesTableSeeder::class);
    $this->call(NotesTableSeeder::class);
    $this->call(NumalertesTableSeeder::class);
    $this->call(OriginesTableSeeder::class);
    $this->call(SaisiesTableSeeder::class);
    $this->call(SalertesTableSeeder::class);
    $this->call(SchiffresTableSeeder::class);
    $this->call(SindicateursTableSeeder::class);
    $this->call(SoriginesTableSeeder::class);
    // $this->call(AmisTableSeeder::class);
    $this->call(EspeceNoteTableSeeder::class);
    $this->call(EspeceParticipantTableSeeder::class);
    $this->call(ParafermeUserTableSeeder::class);
    $this->call(ChiffreEspeceTableSeeder::class);
    }
}

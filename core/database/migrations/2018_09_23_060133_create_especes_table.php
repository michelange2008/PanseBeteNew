<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEspecesTable extends Migration {

	public function up()
	{
		Schema::create('especes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 191)->index();
			$table->string('icone', 191)->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('especes');
	}
}

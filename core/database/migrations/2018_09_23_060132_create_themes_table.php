<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThemesTable extends Migration {

	public function up()
	{
		Schema::create('themes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 191)->index();
			$table->string('icone', 191);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('themes');
	}
}

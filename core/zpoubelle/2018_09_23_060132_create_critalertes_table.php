<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCritalertesTable extends Migration {

	public function up()
	{
		Schema::create('critalertes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('alerte_id')->unsigned()->index();
			$table->string('nom', 191);
		});
	}

	public function down()
	{
		Schema::drop('critalertes');
	}
}

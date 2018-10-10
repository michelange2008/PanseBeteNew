<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalertesTable extends Migration {

	public function up()
	{
		Schema::create('salertes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('sliste_id')->unsigned()->index();
			$table->integer('alerte_id')->unsigned()->index();
			$table->string('valeur',191);
			$table->boolean('danger');
		});
	}

	public function down()
	{
		Schema::drop('salertes');
	}
}

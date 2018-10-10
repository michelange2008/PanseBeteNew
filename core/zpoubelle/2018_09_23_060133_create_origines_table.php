<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOriginesTable extends Migration {

	public function up()
	{
		Schema::create('origines', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('alerte_id')->unsigned()->index();
			$table->string('question', 191);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('origines');
	}
}

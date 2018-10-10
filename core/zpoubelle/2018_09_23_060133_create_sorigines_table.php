<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoriginesTable extends Migration {

	public function up()
	{
		Schema::create('sorigines', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('origine_id')->unsigned();
			$table->integer('salerte_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('sorigines');
	}
}
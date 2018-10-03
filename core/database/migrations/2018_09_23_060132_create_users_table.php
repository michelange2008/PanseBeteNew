<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 191)->index();
			$table->string('email', 191)->index();
			$table->string('password', 191);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertesTable extends Migration {

	public function up()
	{
		Schema::create('alertes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 191)->index();
			$table->enum('type', ['liste', 'valeur', 'pourcentage', 'nombre', 'poids', 'boolean', 'jours']);
			$table->string('unite', 191);
			$table->integer('niveau',10);
			$table->string('modalites', 191);
			$table->integer('theme_id')->unsigned()->index();
			$table->integer('espece_id')->unsigned()->index();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('alertes');
	}
}

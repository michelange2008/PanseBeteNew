<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('alertes', function(Blueprint $table) {
			$table->foreign('theme_id')->references('id')->on('themes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('alertes', function(Blueprint $table) {
			$table->foreign('espece_id')->references('id')->on('especes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('critalertes', function(Blueprint $table) {
			$table->foreign('alerte_id')->references('id')->on('alertes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('origines', function(Blueprint $table) {
			$table->foreign('alerte_id')->references('id')->on('alertes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('salertes', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('salertes', function(Blueprint $table) {
			$table->foreign('alerte_id')->references('id')->on('alertes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('sorigines', function(Blueprint $table) {
			$table->foreign('salerte_id')->references('id')->on('salertes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('alertes', function(Blueprint $table) {
			$table->dropForeign('alertes_theme_id_foreign');
		});
		Schema::table('alertes', function(Blueprint $table) {
			$table->dropForeign('alertes_espece_id_foreign');
		});
		Schema::table('critalertes', function(Blueprint $table) {
			$table->dropForeign('critalertes_alerte_id_foreign');
		});
		Schema::table('origines', function(Blueprint $table) {
			$table->dropForeign('origines_alerte_id_foreign');
		});
		Schema::table('salertes', function(Blueprint $table) {
			$table->dropForeign('salertes_user_id_foreign');
		});
		Schema::table('salertes', function(Blueprint $table) {
			$table->dropForeign('salertes_alerte_id_foreign');
		});
		Schema::table('sorigines', function(Blueprint $table) {
			$table->dropForeign('sorigines_salerte_id_foreign');
		});
	}
}
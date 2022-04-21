<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 191)->index('alertes_nom_index');
            $table->enum('type', ['liste', 'valeur', 'pourcentage', 'nombre', 'poids', 'boolean']);
            $table->string('unite', 191);
            $table->integer('niveau');
            $table->string('modalites', 191);
            $table->unsignedInteger('theme_id')->index('alertes_theme_id_index');
            $table->unsignedInteger('espece_id')->index('alertes_espece_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alertes');
    }
}

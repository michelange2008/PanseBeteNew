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
            $table->bigInteger('type_id')->unsigned();
            $table->string('unite', 191);
            $table->bigInteger('modalite_id')->unsigned();
            $table->unsignedInteger('theme_id')->index('alertes_theme_id_index');
            $table->unsignedInteger('espece_id')->index('alertes_espece_id_index');
            $table->boolean('actif')->default(1);
            $table->boolean('supprimable')->default(1);
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCritalertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critalertes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('alerte_id')->index('critalertes_alerte_id_index');
            $table->string('nom', 191);
            $table->integer('valeur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('critalertes');
    }
}

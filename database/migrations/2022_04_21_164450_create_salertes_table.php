<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salertes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('alerte_id')->index('alerte_id');
            $table->unsignedInteger('saisie_id')->index('saisie_id');
            $table->string('valeur', 191);
            $table->boolean('danger');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salertes');
    }
}

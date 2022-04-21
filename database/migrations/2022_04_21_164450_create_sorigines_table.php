<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoriginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorigines', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('origine_id')->index('pb_sorigines_ibfk_1');
            $table->unsignedInteger('salerte_id')->index('sorigines_salerte_id_index');
            $table->unsignedInteger('saisie_id')->index('saisie_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sorigines');
    }
}

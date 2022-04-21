<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOriginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('origines', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('alerte_id')->index('origines_alerte_id_index');
            $table->string('question', 191);
            $table->string('reponse', 191);
            $table->unsignedInteger('categorie_id')->index('categorie_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('origines');
    }
}

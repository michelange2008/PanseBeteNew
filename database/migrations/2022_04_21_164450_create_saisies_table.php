<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaisiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saisies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('slistes_user_id_foreign');
            $table->unsignedInteger('elevage_id')->index('elevage_id');
            $table->unsignedInteger('espece_id')->index('pb_saisies_ibfk_1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saisies');
    }
}

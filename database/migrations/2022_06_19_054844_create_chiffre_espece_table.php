<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('chiffre_espece', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->foreignId('chiffre_id')->constrained('chiffres')
              ->onUpdate('cascade')->onDelete('cascade');
        $table->foreignId('espece_id')->constrained('especes')
              ->onUpdate('cascade')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chiffre_espece');
    }
};

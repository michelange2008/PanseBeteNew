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
        Schema::create('sindicateurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alerte_id')->constrained();
            $table->foreignId('saisie_id')->constrained();
            $table->double('indicateur', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sindicateurs');
    }
};

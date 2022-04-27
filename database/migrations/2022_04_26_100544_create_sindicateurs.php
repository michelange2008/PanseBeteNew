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
            $table->unsignedInteger('alerte_id');
            $table->unsignedInteger('saisie_id');
            $table->float('indicateur', 8, 2);
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

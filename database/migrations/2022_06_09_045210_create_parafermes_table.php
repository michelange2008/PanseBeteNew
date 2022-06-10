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
        Schema::create('parafermes', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 191);
            $table->enum('type', ['int', 'float', 'liste']);
            $table->string('unite', 10)->nullable();
            $table->json('liste')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parafermes');
    }
};

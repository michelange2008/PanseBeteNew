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
        Schema::create('chiffres', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->foreignId('typenum_id')->constrained()
                  ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('groupe_id')->constrained()
                  ->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('actif')->default(1);
            $table->boolean('supprimable')->default(1);
            $table->boolean('required')->default(1);
            $table->integer('min', 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chiffres');
    }
};

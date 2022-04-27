<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Saisie;

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
            $table->unsignedInteger('saisie_id');
            $table->foreign('saisie_id')->references('id')->on('saisies')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('libelle', 191)->index('chiffres_libelle_index');
            $table->float('valeur', 8, 2)->default(0);
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

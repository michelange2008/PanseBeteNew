<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspeceNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espece_note', function (Blueprint $table) {
            $table->unsignedInteger('espece_id')->index('table_espece_note_espece_id_index');
            $table->unsignedInteger('note_id')->index('table_espece_note_note_id_index');

            $table->primary(['espece_id', 'note_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espece_note');
    }
}

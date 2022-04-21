<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspeceParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espece_participant', function (Blueprint $table) {
            $table->unsignedInteger('espece_id')->index('espece_participant_espece_id_index');
            $table->unsignedInteger('participant_id')->index('espece_participant_participant_id_index');

            $table->primary(['espece_id', 'participant_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espece_participant');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEspeceParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('espece_participant', function (Blueprint $table) {
            $table->foreign(['participant_id'], 'espece_participant_participant_id_foreign')->references(['id'])->on('participants')->onDelete('CASCADE');
            $table->foreign(['espece_id'], 'espece_participant_espece_id_foreign')->references(['id'])->on('especes')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('espece_participant', function (Blueprint $table) {
            $table->dropForeign('espece_participant_participant_id_foreign');
            $table->dropForeign('espece_participant_espece_id_foreign');
        });
    }
}

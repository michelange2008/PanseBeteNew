<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSoriginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sorigines', function (Blueprint $table) {
            $table->foreign(['saisie_id'], 'pb_sorigines_ibfk_2')->references(['id'])->on('saisies')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['origine_id'], 'pb_sorigines_ibfk_1')->references(['id'])->on('origines')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['salerte_id'], 'sorigines_salerte_id_foreign')->references(['id'])->on('salertes')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sorigines', function (Blueprint $table) {
            $table->dropForeign('pb_sorigines_ibfk_2');
            $table->dropForeign('pb_sorigines_ibfk_1');
            $table->dropForeign('sorigines_salerte_id_foreign');
        });
    }
}

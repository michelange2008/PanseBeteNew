<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSaisiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('saisies', function (Blueprint $table) {
            $table->foreign(['elevage_id'], 'pb_saisies_ibfk_2')->references(['id'])->on('elevages')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['espece_id'], 'pb_saisies_ibfk_1')->references(['id'])->on('especes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'slistes_user_id_foreign')->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('saisies', function (Blueprint $table) {
            $table->dropForeign('pb_saisies_ibfk_2');
            $table->dropForeign('pb_saisies_ibfk_1');
            $table->dropForeign('slistes_user_id_foreign');
        });
    }
}

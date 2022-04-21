<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAlertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alertes', function (Blueprint $table) {
            $table->foreign(['theme_id'], 'alertes_theme_id_foreign')->references(['id'])->on('themes');
            $table->foreign(['espece_id'], 'alertes_espece_id_foreign')->references(['id'])->on('especes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alertes', function (Blueprint $table) {
            $table->dropForeign('alertes_theme_id_foreign');
            $table->dropForeign('alertes_espece_id_foreign');
        });
    }
}

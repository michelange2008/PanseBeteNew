<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAlertesTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alertes', function (Blueprint $table) {
            $table->foreign(['type_id'], 'alertes_type_id_foreign')->references(['id'])->on('types');
            $table->foreign(['modalite_id'], 'alertes_modalite_id_foreign')->references(['id'])->on('modalites');
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
            $table->dropForeign('alertes_type_id_foreign');
            $table->dropForeign('alertes_modalite_id_foreign');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCritalertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('critalertes', function (Blueprint $table) {
            $table->foreign(['alerte_id'], 'critalertes_alerte_id_foreign')->references(['id'])->on('alertes')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('critalertes', function (Blueprint $table) {
            $table->dropForeign('critalertes_alerte_id_foreign');
        });
    }
}

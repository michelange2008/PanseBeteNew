<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOriginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('origines', function (Blueprint $table) {
            $table->foreign(['categorie_id'], 'pb_origines_ibfk_1')->references(['id'])->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('origines', function (Blueprint $table) {
            $table->dropForeign('pb_origines_ibfk_1');
        });
    }
}

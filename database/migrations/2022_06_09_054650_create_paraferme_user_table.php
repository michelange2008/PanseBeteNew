<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paraferme_user', function (Blueprint $table) {
          $table->bigIncrements();
          $table->foreignId('user_id')->constrained();
          $table->foreignId('paraferme_id')->constrained()
                ->onUpdate('cascade')->onDelete('cascade');
          $table->string('value', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paraferme_user');
    }
};

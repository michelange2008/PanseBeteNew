<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191)->index('users_name_index');
            $table->string('email', 191)->index('users_email_index');
            $table->string('password', 191);
            $table->string('profession', 191)->default('non précisée');
            $table->string('region', 191)->default('non précisée');
            $table->tinyInteger('admin')->default(0);
            $table->tinyInteger('valide');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

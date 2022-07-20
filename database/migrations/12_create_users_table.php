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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->index('users_name_index');
            $table->string('email', 191)->index('users_email_index');
            $table->string('password', 191);
            $table->string('profession', 191)->nullable();
            $table->string('region', 191)->nullable();
            $table->boolean('admin')->default(0);
            $table->foreignId('role_id')->constrained()->default(3);
            $table->boolean('valide')->default(0);
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
};

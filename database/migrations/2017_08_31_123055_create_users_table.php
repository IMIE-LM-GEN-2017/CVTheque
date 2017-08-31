<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('prenom');
            $table->string('nom');
            $table->string('mdp');
            $table->string('email')->unique();
            $table->date('date_naissance');
            $table->string('cp');
            $table->string('adresses');
            $table->string('ville');
            $table->string('tel');
            $table->dateTime('date_adhesion');
            $table->string('civilité');
            $table->string('disponible');
            $table->string('avatar')->default('default.jpg');
            $table->string('role')->default('user');
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

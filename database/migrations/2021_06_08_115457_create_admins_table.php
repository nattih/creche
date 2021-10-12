<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('roles');
            $table->string('sexe')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('cnib')->nullable();
            $table->date('naissance')->nullable();
            $table->string('lieu_nais')->nullable();
            $table->string('residence')->nullable();
            $table->string('poste')->nullable();
            $table->date('debut_fonction')->nullable();
            $table->string('contrat')->nullable();
            $table->text('photo')->nullable();
            $table->boolean('statut')->default(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('admins');
    }
}

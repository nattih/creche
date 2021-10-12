<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBebesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom'); 
            $table->string('sexe')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('parent2')->nullable();
            $table->integer('contact')->nullable();
            $table->date('dat_naiss')->nullable();
            $table->date('debut_fonction')->nullable(); 
            $table->string('nounou')->nullable();
            $table->string('contrat')->nullable();
            $table->text('photo')->nullable();
            $table->boolean('statut')->default(false);
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
        Schema::dropIfExists('bebes');
    }
}

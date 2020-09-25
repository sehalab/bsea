<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foyers', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('nom_village');
            $table->string('photo');
            $table->unsignedBigInteger('user_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('nom');
            $table->string('postnom');
            $table->string('genre');
            $table->string('etatcivil');
            $table->string('numerocarte');
            $table->string('photo_propriete');
            $table->string('statut');
            $table->mediumInteger('duree');
            $table->unsignedBigInteger('proprio_id')->nullable();
            $table->timestamps();
        });

        Schema::table('foyers', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foyers');
    }
}

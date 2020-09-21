<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('postnom');
            $table->string('genre');
            $table->string('etatcivil');
            $table->string('numerocarte');
            $table->string('statut');
            $table->string('photo');
            $table->unsignedBigInteger('foyer_id');
            $table->timestamps();
        });

        Schema::table('proprietes', function(Blueprint $table){
            $table->foreign('foyer_id')->references('id')->on('foyers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proprietes');
    }
}

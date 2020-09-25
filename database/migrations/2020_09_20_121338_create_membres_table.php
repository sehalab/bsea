<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('nomcomplet');
            $table->string('relation');
            $table->string('genre');
            $table->mediumInteger('age');
            $table->string('niveauetudes');
            $table->string('occupation');
            $table->string('vulnerabilite');
            $table->string('ecole');
            $table->string('etatcivil');
            $table->unsignedBigInteger('foyer_id');
            $table->timestamps();
        });

        Schema::table('membres', function(Blueprint $table){
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
        Schema::dropIfExists('membres');
    }
}

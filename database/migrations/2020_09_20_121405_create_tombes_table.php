<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTombesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombes', function (Blueprint $table) {
            $table->id();
            $table->string('lienparente');
            $table->string('refphoto');
            $table->string('heure');
            $table->mediumInteger('annee');
            $table->unsignedBigInteger('foyer_id');
            $table->string('local_E');
            $table->string('local_N');
            $table->timestamps();
        });

        Schema::table('tombes', function(Blueprint $table){
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
        Schema::dropIfExists('tombes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->mediumInteger('longueur');
            $table->mediumInteger('largeur');
            $table->string('materiaux');
            $table->unsignedBigInteger('propriete_id');
            $table->timestamps();
        });

        Schema::table('structures', function(Blueprint $table){
            $table->foreign('propriete_id')->references('id')->on('proprietes')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('structures');
    }
}

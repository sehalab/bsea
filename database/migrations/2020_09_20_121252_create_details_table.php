<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('statut');
            $table->mediumInteger('duree');
            $table->unsignedBigInteger('propriete_id');
            $table->unsignedBigInteger('proprio_id');
            $table->timestamps();
        });

        Schema::table('details', function(Blueprint $table){
            $table->foreign('propriete_id')->references('id')->on('proprietes')->cascadeOnDelete();
            $table->foreign('proprio_id')->references('id')->on('proprios')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}

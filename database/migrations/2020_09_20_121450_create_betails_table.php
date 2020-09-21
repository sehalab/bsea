<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('betails', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('propriete_id');
            $table->timestamps();
        });

        Schema::table('betails', function(Blueprint $table){
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
        Schema::dropIfExists('betails');
    }
}

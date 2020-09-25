<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbres', function (Blueprint $table) {
            $table->id();
            $table->string('usage');
            $table->string('nom');
            $table->unsignedBigInteger('foyer_id');
            $table->timestamps();
        });

        Schema::table('arbres', function (Blueprint $table) {
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
        Schema::dropIfExists('arbres');
    }
}

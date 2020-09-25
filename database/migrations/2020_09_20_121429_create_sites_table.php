<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('refphoto');
            $table->boolean('etat');
            $table->unsignedBigInteger('foyer_id');
            $table->string('local_E');
            $table->string('local_N');
            $table->timestamps();
        });

        Schema::table('sites', function (Blueprint $table) {
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
        Schema::dropIfExists('sites');
    }
}

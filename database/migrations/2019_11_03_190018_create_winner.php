<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winner', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('competition_id');
            //$table->foreign('competition_id')->references('id')->on('settings');
            $table->integer('participant_id');
            //$table->foreign('participant_id')->references('id')->on('participants');

            $table->string('competition_name');
            //$table->foreign('competition_name')->references('competition_name')->on('settings');
            $table->string('winner');
            //$table->foreign('winner')->references('winner')->on('setting');
            $table->string('code');
            //$table->foreign('code')->references('id')->on('participants');
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
        Schema::dropIfExists('winner');
    }
}

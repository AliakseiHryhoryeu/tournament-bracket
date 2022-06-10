<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {

        Schema::create('player_tournament', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_id');
            $table->unsignedInteger('tournament_id');

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('tournament_id')->references('id')->on('tournaments');
        });

        Schema::create('player_player', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player1_id');
            $table->unsignedInteger('player2_id');
            $table->unsignedInteger('tournament_id');

            $table->foreign('player1_id')->references('id')->on('players');
            $table->foreign('player2_id')->references('id')->on('players');
            $table->foreign('tournament_id')->references('id')->on('tournaments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('player_tournaments');
        Schema::dropIfExists('player_player');
    }
};

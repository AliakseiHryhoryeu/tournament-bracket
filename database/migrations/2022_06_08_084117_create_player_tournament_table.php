<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('player_tournament', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('player_id');
            $table->unsignedBigInteger('tournament_id');

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('tournament_id')->references('id')->on('tournaments');
        });

    }

    public function down()
    {
        Schema::dropIfExists('player_tournaments');
    }
};

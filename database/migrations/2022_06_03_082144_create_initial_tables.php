<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('city');
        });

        Schema::create('tournaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->date('start_date')->default(date("Y-m-d H:i:s"));
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
        Schema::dropIfExists('tournaments');
    }
};

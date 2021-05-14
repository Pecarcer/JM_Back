<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardgamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boardgames', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('creator');
            $table->date('release');
            $table->string('max_num_players');
            $table->string('min_num_players');
            $table->string('playing_time');
            $table->string('ages');
            $table->string('publisher');
            $table->string('image');
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
        Schema::dropIfExists('boardgames');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('master');
            $table->unsignedbigInteger('boardgame_id');
            $table->date('date');
            $table->time('time');
            $table->timestamps();
            $table->foreign('master')->references('id')->on('users')->onDelete("cascade");
            $table->foreign('boardgame_id')->references('id')->on('boardgames')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}

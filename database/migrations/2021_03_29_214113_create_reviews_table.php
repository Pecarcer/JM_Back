<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('reviewer');
            $table->unsignedbigInteger('boardgame_id');
            $table->integer('score');
            $table->string('opinion');
            $table->timestamps();

            $table->foreign('reviewer')->references('id')->on('users')->onDelete("cascade");
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
        Schema::dropIfExists('reviews');
    }
}

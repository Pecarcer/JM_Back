<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('author');
            $table->unsignedbigInteger('review_id')->nullable();
            $table->unsignedbigInteger('post')->nullable();
            $table->string('commentary');
            $table->timestamps();

            $table->foreign('author')->references('id')->on('users')->onDelete("cascade");
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete("cascade");
            $table->foreign('post')->references('id')->on('posts')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}

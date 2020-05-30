<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('commentID',11);
            $table->string('name',100)->default('Anonymous');
            $table->string('email',100)->nullable();
            $table->text('comment');
            $table->dateTime('created_at');
            $table->integer('postID')->unsigned();
            $table->foreign('postID')->references('postID')->on('posts')->onDelete('cascade'); 
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

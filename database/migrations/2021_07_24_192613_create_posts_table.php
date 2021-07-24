<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->bigInteger('parent_id');
            $table->mediumText('title');
            $table->tinyText('slug');
            $table->tinyText('summary');
            $table->tinyInteger('published');
            $table->date('published_at');
            $table->text('content');
            $table->tinyText('img_url');
            $table->timestamps();

            //foreign key
            $table->foreign('author_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

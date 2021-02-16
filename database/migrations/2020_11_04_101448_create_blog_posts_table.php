<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('blog_categories_id');

            $table->string('slug')->unique();
            $table->string('title');
            $table->text('description')->nullable();

            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            $table->text('article')->nullable();

            $table->string('img')->nullable();

            $table->foreign('blog_categories_id')
                ->references('id')
                ->on('blog_categories')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}

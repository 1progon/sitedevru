<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'templates',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();

                $table->string('title');
                $table->string('slug')->unique();

                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();

                $table->text('description');
                $table->text('article')->nullable();

                $table->boolean('on_homepage')->default(0);

                $table->string('img')->nullable();
                $table->string('img2')->nullable();

                $table->string('url')->nullable();
                $table->string('url_original_link')->nullable();


                $table->string('cms');
                $table->string('framework')->nullable();
                $table->string('backend')->nullable();
                $table->string('frontend')->nullable();
                $table->string('established')->nullable();
                $table->string('site_type')->nullable();
                $table->text('additional_info')->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates');
    }
}

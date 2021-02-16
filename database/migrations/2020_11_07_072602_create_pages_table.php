<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'pages',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();

                $table->string('title');
                $table->string('slug')->unique();

                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();


                $table->text('description')->nullable();
                $table->text('article')->nullable();
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
        Schema::dropIfExists('pages');
    }
}

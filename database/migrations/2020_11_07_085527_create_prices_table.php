<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'prices',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();

                $table->string('title');
                $table->string('slug')->unique();

                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();

                $table->text('description');

                $table->boolean('on_homepage')->default(0);

                $table->unsignedInteger('price');
                
                $table->string('img')->nullable();
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
        Schema::dropIfExists('prices');
    }
}

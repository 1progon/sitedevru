<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePriceIncluded extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_included', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('price_id');

            $table->string('title');
            $table->string('slug')->unique();

            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            $table->text('description')->nullable();
            $table->string('img')->nullable();


            $table->foreign('price_id')
                ->references('id')
                ->on('prices')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_included');
    }
}

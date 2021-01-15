<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'testimonials',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
                $table->unsignedBigInteger('user_id');

                $table->string('title');
                $table->string('slug')->unique();

                $table->string('img')
                    ->default('https://www.flaticon.com/svg/static/icons/svg/599/599305.svg');

                $table->text('message')->nullable();
                $table->float('rating')->default(0);

                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('restrict');
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
        Schema::dropIfExists('testimonials');
    }
}

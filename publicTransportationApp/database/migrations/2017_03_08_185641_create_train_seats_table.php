<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_seats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('t_seat_num');

            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('type_id')->on('train_types')->onDelete('cascade');

            $table->integer('train_num')->nullable();
            $table->foreign('train_num')->references('train_num')->on('trains')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_seats');
    }
}

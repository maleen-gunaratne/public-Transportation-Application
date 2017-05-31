<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainShedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_shedules', function (Blueprint $table) {
            $table->increments('t_schedule_id');
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->string('train_name');
            $table->date('date');
            $table->string('route_num');
            $table->string('route_name')->nullable();
            $table->time('departure_time');
            $table->time('arrival_time');

//            $table->integer('user_id')->unsigned()->nullable();
//            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');

            $table->integer('passenger_id')->unsigned()->nullable();
            $table->foreign('passenger_id')->references('passenger_id')->on('passengers')->onDelete('cascade');

            $table->integer('schedule_id')->unsigned()->nullable();
            $table->foreign('schedule_id')->references('schedule_id')->on('tests')->onDelete('cascade');

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
        Schema::dropIfExists('train_shedules');
    }
}

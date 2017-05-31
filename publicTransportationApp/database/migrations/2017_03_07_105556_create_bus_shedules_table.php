<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusShedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_shedules', function (Blueprint $table) {
            $table->increments('b_schedule_id');
            $table->string('origin');
            $table->string('destination');
            $table->string('date');
            $table->string('route_num');
            $table->string('route_name')->nullable();
            $table->time('departure_time');
            $table->time('arrival_time');

            $table->integer('passenger_id')->unsigned()->nullable();
            $table->foreign('passenger_id')->references('passenger_id')->on('passengers')->onDelete('cascade');

            $table->integer('schedule_id')->unsigned()->nullable();
            $table->foreign('schedule_id')->references('schedule_id')->on('tests')->onDelete('cascade');


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
        Schema::dropIfExists('bus_shedules');
    }
}

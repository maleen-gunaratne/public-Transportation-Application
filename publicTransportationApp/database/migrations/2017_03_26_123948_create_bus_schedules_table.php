<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->increments('bus_schedule_id');
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->date('date')->nullable();
            $table->string('route_num')->nullable();
            $table->string('route_name')->nullable();
            $table->string('bus_number');
            $table->time('departure_time');
            $table->time('arrival_time');

            $table->integer('bus_id')->unsigned()->nullable();
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');

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
        Schema::dropIfExists('bus_schedules');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_stops', function (Blueprint $table) {
            $table->increments('bus_stop_id');
            $table->string('locationname')->nullable();
            $table->string('route_num')->nullable();
            $table->double('longitude');
            $table->double('latitude');

//            $table->integer('route_id');
//            $table->foreign('route_id')->references('bus_route_id')->on('bus_routes');
//
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
        Schema::dropIfExists('bus_stops');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusRouteInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_route_ins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bus_stop_id')->unsigned()->nullable();
            $table->foreign('bus_stop_id')->references('bus_stop_id')->on('bus_stops')->onDelete('cascade');
            $table->integer('bus_route_id')->unsigned()->nullable();
            $table->foreign('bus_route_id')->references('bus_route_id')->on('bus_routes')->onDelete('cascade');
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
        Schema::dropIfExists('bus_route_ins');
    }
}

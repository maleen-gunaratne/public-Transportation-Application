<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bus_num')->unique();
            $table->string('name');
            $table->string('image_url')->nullable();
            //$table->string('licence_num');
            $table->string('route_name');

            $table->integer('route_id')->unsigned()->nullable();
            $table->foreign('route_id')->references('bus_route_id')->on('bus_routes')->onDelete('cascade');

            $table->string('speed_type');
            $table->string('condition_type');
            $table->integer('insurance');
            $table->integer('gps_module_id');
            $table->integer('seat_plane_id');

//            $table->integer('seat_plane_id')->nullable();
//            $table->foreign('seat_plane_id')->references('seat_plane_id')->on('seat_planes');

            $table->integer('num_of_seat');

            $table->integer('num_of_reseavable_seat');

            $table->integer('owner_id')->nullable();
            $table->foreign('owner_id')->references('own_id')->on('owners');

            //$table->foreign('seat_plane_id')->references('seat_plane_id')->on('seat_planes')->onDelete('cascade');

//            $table->integer('bus_location_id')->unsigned()->nullable();
//            $table->foreign('bus_location_id')->references('location_id')->on('bus_locations');

            $table->integer('schedule_id')->unsigned()->nullable();
            $table->foreign('schedule_id')->references('Schedule_id')->on('bus_shedules');

            // $table->foreign('stfm_role')->references('role_id')->on('bus_staff_roles')->onDelete('cascade');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}

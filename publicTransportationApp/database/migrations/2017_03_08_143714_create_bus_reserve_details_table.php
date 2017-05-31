<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusReserveDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_reserve_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seat_id')->unique();
            $table->boolean('is_reserved');

            $table->string('bus_number')->nullable();
            $table->foreign('bus_number')->references('bus_num')->on('buses');

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
        Schema::dropIfExists('bus_reserve_details');
    }
}

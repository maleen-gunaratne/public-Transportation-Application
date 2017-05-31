<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->integer('train_num')->primary();
            $table->string('train_name');
            $table->string('route_name');
            $table->string('speed_type');
            $table->integer('gps_module_id')->unique();
            $table->integer('total_receivable_seat');
            //$table->integer('seat_plane_id');
            //$table->string('condition_type');
            $table->string('available_date');

            $table->integer('train_location_id')->unsigned()->nullable();
            $table->foreign('train_location_id')->references('train_location_id')->on('train_locations')->onDelete('cascade');

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
        Schema::dropIfExists('trains');
    }
}

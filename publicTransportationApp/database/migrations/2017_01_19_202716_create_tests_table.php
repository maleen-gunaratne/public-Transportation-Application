<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('schedule_id');
//
//            $table->integer('passenger_id')->unsigned();
//            $table->foreign('passenger_id')->references('user_id')->on('passengers')->onDelete('cascade');
//
//            $table->integer('admin_id')->unsigned();
//            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');

            $table->string('origin');
            $table->string('destination');
            $table->string('route_num');
            $table->string('route_name');
            $table->string('departure_time');
            $table->string('arrival_time');
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
       // Schema::rename($test, $shedule);
        Schema::dropIfExists('tests');
    }
}

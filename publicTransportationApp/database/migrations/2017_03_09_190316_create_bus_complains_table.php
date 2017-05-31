<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_complains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bus_number')->nullable();
            $table->text('content');
            $table->string('image_url')->nullable();
            $table->string('route_name')->nullable();


            $table->integer('passenger_id')->unsigned()->nullable();
            $table->foreign('passenger_id')->references('passenger_id')->on('passengers')->onDelete('cascade');

            $table->integer('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');

            $table->integer('bus_id')->unsigned();
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');


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
        Schema::dropIfExists('bus_complains');
    }
}

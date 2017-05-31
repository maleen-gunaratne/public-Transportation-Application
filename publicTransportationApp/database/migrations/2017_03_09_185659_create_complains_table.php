<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->increments('complain_id');
            $table->string('vehicle_id')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->text('content');
            $table->string('image_url')->nullable();
            $table->string('route_area')->nullable();


            $table->integer('passenger_id')->unsigned()->nullable();
            $table->foreign('passenger_id')->references('passenger_id')->on('passengers')->onDelete('cascade');

            $table->integer('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');

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
        Schema::dropIfExists('complains');
    }
}

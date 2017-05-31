<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->increments('passenger_id');
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->integer('mobile_num');

            $table->date('dob')->nullable();
            $table->string('e_mail')->unique()->nullable();
            $table->string('nic')->nullable();
            $table->string('Gender')->nullable();
           // $table->string('working_place')->nullable();
            $table->string('profile_pic_url')->nullable();


//            $table->integer('user_id')->unsigned()->nullable();
//            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('passengers');
    }
}

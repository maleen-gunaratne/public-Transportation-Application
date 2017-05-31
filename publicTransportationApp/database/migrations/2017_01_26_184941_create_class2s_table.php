<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClass2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('class2s', function (Blueprint $table) {
//            $table->increments('classid');
//            $table->integer('train_no');
//            $table->integer('nu_of_seat');
//            $table->string('condition_type');
//            $table->string('category_type');
//            $table->integer('seat_plane_id');
//            $table->timestamps();
//
////            $table->index('train_no');
////            $table->foreign('train_no')->references('train_no')->on('train')
////                ->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class2s');
    }
}

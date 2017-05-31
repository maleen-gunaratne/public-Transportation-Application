<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_types', function (Blueprint $table) {
            $table->increments('type_id');
            $table->string('type_name');

            $table->integer('class_id')->unsigned()->nullable();
            $table->foreign('class_id')->references('class_id')->on('class1s')->onDelete('cascade');

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
        Schema::dropIfExists('train_types');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendcomplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sendcomplains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bus_number');
            $table->string('e_mail');
            $table->text('content');
            $table->string('image_url')->nullable();
            $table->string('bus_id');
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
        Schema::dropIfExists('sendcomplains');
    }
}

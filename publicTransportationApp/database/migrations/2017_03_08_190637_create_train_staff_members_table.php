<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainStaffMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_staff_members', function (Blueprint $table) {
            $table->increments('tstfm_id');
           // $table->integer('tsfm_role_id')->unsigned();
            $table->string('tstfm_name');
            $table->string('designation');
            $table->date('tstfm_dob');
            $table->string('nic_num');
            $table->string('tstfm_licence_num');

          //  $table->foreign('tsfm_role_id')->references('role_id')->on('train_staff_roles')->onDelete('cascade');
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
        Schema::dropIfExists('train_staff_members');
    }
}

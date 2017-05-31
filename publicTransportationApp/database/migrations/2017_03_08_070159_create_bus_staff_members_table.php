<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusStaffMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_staff_members', function (Blueprint $table) {
            $table->increments('bstfm_id');
            $table->integer('stfm_role')->unsigned()->nullable();
            $table->string('designation');
            $table->string('bstfm_name');
            $table->date('bstfm_dob');
            $table->string('nic_num');
            $table->string('bstfm_licence_num');

            $table->foreign('stfm_role')->references('role_id')->on('bus_staff_roles')->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_staff_members');
    }
}

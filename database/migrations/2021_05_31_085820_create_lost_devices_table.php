<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //varchar(255)
            $table->string('doneby');
            $table->string('plate_number');
            $table->string('driver_names');
            $table->string('imei1');
            $table->string('phone_number');
            $table->string('serial_number');
            $table->string('description');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lost_devices');
    }
}

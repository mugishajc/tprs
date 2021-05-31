<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simcards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //varchar(255)
            $table->string('doneby');
            $table->string('telco');
            $table->string('serial_number');
            $table->string('plate_number');
            $table->string('phone_number');
            $table->string('puk');
            $table->string('status');
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
        Schema::dropIfExists('simcards');
    }
}

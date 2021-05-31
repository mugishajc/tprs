<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //varchar(255)
            $table->string('doneby');
            $table->string('plate_number');
            $table->string('names');
            $table->string('phone_number');
            $table->string('technician');
            $table->datetime('date');
            $table->string('query_tag');
            $table->string('issue_description');
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
        Schema::dropIfExists('calls');
    }
}

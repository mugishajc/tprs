<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //varchar(255)
            $table->string('doneby');
            $table->string('names');
            $table->string('phone_number');
            $table->datetime('date');
            $table->string('amount');
            $table->string('description');
            $table->string('verification_status');
            $table->string('approval_status');
            $table->string('verification_signature');
            $table->string('approval_signature');
            $table->string('verified_by');
            $table->string('approved_by');
            $table->string('voucher_status');
            $table->string('employee_approval');
            $table->string('staff_verified_at');
            $table->string('staff_approved_at');
            $table->string('employee_approved_at');
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
        Schema::dropIfExists('vouchers');
    }
}

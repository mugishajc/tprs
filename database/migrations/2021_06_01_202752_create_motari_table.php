<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotariTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motari', function (Blueprint $table) {
            $table->id();
            $table->string('NAMES');
            $table->string('COOPERATIVE');
            $table->string('Ref_Number');
            $table->string('AMOUNTRWF');
            $table->string('ID_NUMBER');
            $table->string('AC_NUMBER');
            $table->string('PLATE_NUMBER');
            $table->string('VILLAGE');
            $table->string('CELL');
            $table->string('SECTOR');
            $table->string('TELEPHONE');
            $table->string('DEVICE_IMEI');
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
        Schema::dropIfExists('motari');
    }
}

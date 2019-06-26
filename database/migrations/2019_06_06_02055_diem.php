<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Diem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diem', function (Blueprint $table) {
            $table->string('ma_sinh_vien',50);
            $table->foreign('ma_sinh_vien')->references('ma_sinh_vien')->on('sinh_vien');
            $table->integer('ma_mon')->unsigned();
            $table->foreign('ma_mon')->references('ma_mon')->on('mon');
            $table->tinyInteger('lan_thi');
            $table->tinyInteger('kieu_thi');
            $table->integer('diem')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diem');
    }
}

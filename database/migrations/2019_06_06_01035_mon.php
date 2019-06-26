<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon', function (Blueprint $table) {
            $table->increments('ma_mon');
            $table->string('ten_mon',100);
            $table->integer('gio_hoc');
            $table->integer('ma_kieu_thi')->unsigned();
            $table->foreign('ma_kieu_thi')->references('ma_kieu_thi')->on('kieu_thi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mon');
    }
}

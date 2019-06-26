<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SinhVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_vien', function (Blueprint $table) {
            $table->string('ma_sinh_vien',50)->unique();
            $table->primary('ma_sinh_vien');
            $table->string('mat_khau',100);
            $table->string('ten_sinh_vien',200);
            $table->date('ngay_sinh');
            $table->tinyInteger('gioi_tinh');
            $table->string('dia_chi',200);
            $table->string('email',100)->unique();
            $table->string('so_dien_thoai',10)->unique();
            $table->tinyInteger('tinh_trang');
            $table->string('khoa',100);
            $table->integer('ma_lop')->unsigned();
            $table->foreign('ma_lop')->references('ma_lop')->on('lop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinh_vien');
    }
}

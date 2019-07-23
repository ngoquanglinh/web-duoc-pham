<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TenSP');
            $table->string('ImageSP');
            $table->integer('Gia');
            $table->boolean('SPKhuyenMai')->default(0);
            $table->boolean('active')->default(0);
            $table->string('LinkVideo');
            $table->boolean('SPMoi')->default(0);
            $table->integer('GiaBanDau');
            $table->integer('GiaHienTai');
            $table->integer('DanhGia');
            $table->text('MoTa');
            $table->text('MoTaNgan');
            $table->boolean('NoiBat')->default(0);
            $table->bigInteger('idLoaiSP')->unsigned();
            $table->foreign('idLoaiSP')
                  ->references('id')->on('loaisanpham')
                  ->unsigned();
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
        Schema::dropIfExists('sanpham');
    }
}

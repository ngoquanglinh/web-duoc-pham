<?php

use Illuminate\Database\Seeder;

class sanpham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sanpham')->insert([
        	['TenSP'=>'Swiss B50','ImageSP'=>'sanpham1.png','Gia'=>'50.000','SPKhuyenMai'=>'1','active'=>'1','idLoaiSP'=>'1','SPMoi'=>'1','GiaBanDau'=>'50.000','GiaHienTai'=>'50.000','DanhGia'=>'1','LinkVideo'=>'abc','MoTa'=>'','MoTaNgan'=>'nmh','idLoaiSP'=>'1','NoiBat'=>'1'],

        	['TenSP'=>'Pure Rosehip','ImageSP'=>'sanpham2.png','Gia'=>'18.000','SPKhuyenMai'=>'1','active'=>'1','idLoaiSP'=>'1','SPMoi'=>'1','GiaBanDau'=>'50.000','GiaHienTai'=>'50.000','DanhGia'=>'1','LinkVideo'=>'abc','MoTa'=>'','MoTaNgan'=>'nmh','idLoaiSP'=>'1','NoiBat'=>'1'],

        	['TenSP'=>'Super 45+','ImageSP'=>'sanpham3.png','Gia'=>'82.000','SPKhuyenMai'=>'1','active'=>'1','idLoaiSP'=>'1','SPMoi'=>'1','GiaBanDau'=>'50.000','GiaHienTai'=>'50.000','DanhGia'=>'1','LinkVideo'=>'abc','MoTa'=>'','MoTaNgan'=>'nmh','idLoaiSP'=>'1','NoiBat'=>'1'],

        	['TenSP'=>'Sundown Naturals','ImageSP'=>'sanpham4.png','Gia'=>'110.000','SPKhuyenMai'=>'1','active'=>'1','idLoaiSP'=>'1','SPMoi'=>'1','GiaBanDau'=>'50.000','GiaHienTai'=>'50.000','DanhGia'=>'1','LinkVideo'=>'abc','MoTa'=>'','MoTaNgan'=>'nmh','idLoaiSP'=>'1','NoiBat'=>'1'],

        	['TenSP'=>'Swiss B50','ImageSP'=>'sanpham1.png','Gia'=>'50.000','SPKhuyenMai'=>'1','active'=>'1','idLoaiSP'=>'1','SPMoi'=>'1','GiaBanDau'=>'50.000','GiaHienTai'=>'50.000','DanhGia'=>'1','LinkVideo'=>'abc','MoTa'=>'','MoTaNgan'=>'nmh','idLoaiSP'=>'1','NoiBat'=>'1'],

        	['TenSP'=>'Pure Rosehip','ImageSP'=>'sanpham2.png','Gia'=>'18.000','SPKhuyenMai'=>'1','active'=>'1','idLoaiSP'=>'1','SPMoi'=>'1','GiaBanDau'=>'50.000','GiaHienTai'=>'50.000','DanhGia'=>'1','LinkVideo'=>'abc','MoTa'=>'','MoTaNgan'=>'nmh','idLoaiSP'=>'1','NoiBat'=>'1'],

       		['TenSP'=>'Super 45+','ImageSP'=>'sanpham3.png','Gia'=>'82.000','SPKhuyenMai'=>'1','active'=>'1','idLoaiSP'=>'1','SPMoi'=>'1','GiaBanDau'=>'50.000','GiaHienTai'=>'50.000','DanhGia'=>'1','LinkVideo'=>'abc','MoTa'=>'','MoTaNgan'=>'nmh','idLoaiSP'=>'1','NoiBat'=>'1'],

        	['TenSP'=>'Sundown Naturals','ImageSP'=>'sanpham4.png','Gia'=>'110.000','SPKhuyenMai'=>'1','active'=>'1','idLoaiSP'=>'1','SPMoi'=>'1','GiaBanDau'=>'50.000','GiaHienTai'=>'50.000','DanhGia'=>'1','LinkVideo'=>'abc','MoTa'=>'','MoTaNgan'=>'nmh','idLoaiSP'=>'1','NoiBat'=>'1'],


        ]);
    }
}

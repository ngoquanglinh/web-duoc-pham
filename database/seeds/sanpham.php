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
        	['TenSP'=>'blackmore','ImageSP'=>'blackmore-spchome.jpg','Gia'=>'60000','SPKhuyenMai'=>'0','active'=>'1','LinkVideo'=>'','SPMoi'=>'0','idLoaiSP'=>'2','GiaKhuyenMai'=>'0','DanhGia'=>'1','MoTa'=>'asdv','MoTaNgan'=>'nmh','NoiBat'=>'1'],

        	['TenSP'=>'Decumen','ImageSP'=>'decumen-spchome.jpg','Gia'=>'100000','SPKhuyenMai'=>'1','active'=>'1','LinkVideo'=>'','SPMoi'=>'0','idLoaiSP'=>'2','GiaKhuyenMai'=>'50000','DanhGia'=>'1','MoTa'=>'asdv','MoTaNgan'=>'nmh','NoiBat'=>'1'],

        	['TenSP'=>'Humana','ImageSP'=>'humana-spchome.jpg','Gia'=>'80000','SPKhuyenMai'=>'0','active'=>'1','LinkVideo'=>'','SPMoi'=>'0','idLoaiSP'=>'2','GiaKhuyenMai'=>'0','DanhGia'=>'1','MoTa'=>'asdv','MoTaNgan'=>'nmh','NoiBat'=>'1'],

        	['TenSP'=>'liquid','ImageSP'=>'liquid-spchome.jpg','Gia'=>'100000','SPKhuyenMai'=>'1','active'=>'1','LinkVideo'=>'','SPMoi'=>'0','idLoaiSP'=>'2','GiaKhuyenMai'=>'70000','DanhGia'=>'1','MoTa'=>'asdv','MoTaNgan'=>'nmh','NoiBat'=>'1'],

        	['TenSP'=>'Nature','ImageSP'=>'Nature-sanphamchome.jpg','Gia'=>'210000','SPKhuyenMai'=>'0','active'=>'1','LinkVideo'=>'','SPMoi'=>'0','idLoaiSP'=>'2','GiaKhuyenMai'=>'0','DanhGia'=>'1','MoTa'=>'asdv','MoTaNgan'=>'nmh','NoiBat'=>'1'],

        	['TenSP'=>'Obimin','ImageSP'=>'obimin-spchome.jpg','Gia'=>'10000','SPKhuyenMai'=>'1','active'=>'1','LinkVideo'=>'','SPMoi'=>'0','idLoaiSP'=>'2','GiaKhuyenMai'=>'60000','DanhGia'=>'1','MoTa'=>'asdv','MoTaNgan'=>'nmh','NoiBat'=>'1'],

            ['TenSP'=>'vitamin','ImageSP'=>'vitamin-spchome.jpg','Gia'=>'20000','SPKhuyenMai'=>'0','active'=>'1','LinkVideo'=>'','SPMoi'=>'0','idLoaiSP'=>'2','GiaKhuyenMai'=>'0','DanhGia'=>'1','MoTa'=>'www','MoTaNgan'=>'nmh','NoiBat'=>'1'],

        	['TenSP'=>'Earthesth','ImageSP'=>'earthesth-spchome.jpg','Gia'=>'100000','SPKhuyenMai'=>'1','active'=>'1','LinkVideo'=>'','SPMoi'=>'0','idLoaiSP'=>'2','GiaKhuyenMai'=>'50000','DanhGia'=>'1','MoTa'=>'ddd','MoTaNgan'=>'nmh','NoiBat'=>'1'],


        ]);
    }
}

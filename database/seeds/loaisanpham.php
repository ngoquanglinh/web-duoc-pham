<?php

use Illuminate\Database\Seeder;

class loaisanpham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaisanpham')->insert([
        	['id'=>1,'TenLoaiSP'=>'Sản phẩm mới'],
        	['id'=>2,'TenLoaiSP'=>'Sản phẩm cho mẹ'],
        	['id'=>3,'TenLoaiSP'=>'Sản phẩm cho bé'],
        ]);
    }
}

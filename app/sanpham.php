<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table='sanpham';

    public function loaisanpham(){
    	return $this->belongsTo('App\loaisanpham','idLoaiSp','id');
    }
    public function chitiethoadon(){
        return $this->hasMany('App\chitiethoadon','idSanPham','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table='hoadon';

    public function chitiethoadon(){
        return $this->hasMany('App\chitiethoadon','idHoaDon','id');
    }
    public function khachhang(){
        return $this->belongsTo('App\khachhang','idKhachHang','id');
    }
}

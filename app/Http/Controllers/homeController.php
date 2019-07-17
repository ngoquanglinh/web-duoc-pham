<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
    	return view('layout.index');
    }
    public function gioithieu(){
    	return view('layout.intro');
    }
    public function blog(){
    	return view('layout.blog');
    }
    public function sanpham(){
    	return view('layout.product');
    }
    public function sanphamchobe(){
        return view('layout.productChild');
    }
    public function sanphamchome(){
        return view('layout.productMom');
    }
    public function lienhe(){
        return view('layout.contact');
    }
      public function giohang(){
        return view('layout.cart');
    }
    public function thanhtoan(){
        return view('layout.pay');
    }
    public function thanhtoanhoantat(){
        return view('layout.payCompleted');
    }
}

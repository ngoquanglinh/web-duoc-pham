<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaisanpham;
use App\sanpham;
class HomeController extends Controller
{
    function __construct(){
        $loaisp=LoaiSanPham::all();
        $sanpham=SanPham::all();
        view()->share('loaisp',$loaisp);
        view()->share('sanpham',$sanpham);
    }
    public function index(){
        return view('layout.index');
    }
    public function gioithieu(){
        return view('layout.intro');
    }
    public function blog(){
        return view('layout.blog');
    }
    public function sanpham($id){
        $chitietsp=sanpham::find($id);
        $sanpham=sanpham::all();
        $spcungloai=sanpham::where('idLoaiSP',$chitietsp->idLoaiSP)->take(4)->get();
        return view('layout.product',['chitietsp'=>$chitietsp,'spcungloai'=>$spcungloai]);
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

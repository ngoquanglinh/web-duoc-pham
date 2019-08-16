<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\loaisanpham;
use App\sanpham;
use App\slide;
use App\doitac;
class HomeController extends Controller
{
    function __construct(){
        $loaisp=LoaiSanPham::all();
        $sanpham=SanPham::all();
        $slide=slide::where('Status',1)->get();
        $doitac1=doitac::where('Status',1)->skip(0)->take(6)->get();
        $doitac2=doitac::where('Status',1)->skip(6)->take(6)->get();
        view()->share('loaisp',$loaisp);
        view()->share('sanpham',$sanpham);
        view()->share('slide',$slide);
        view()->share('doitac1',$doitac1);
        view()->share('doitac2',$doitac2);
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
        $spchobe=sanpham::where('idLoaiSP',3)->paginate(8);
        return view('layout.productChild',['spchobe'=>$spchobe]);
    }
    public function sanphamchome(){
         $spchome=sanpham::where('idLoaiSP',2)->paginate(8);
        return view('layout.productMom',['spchome'=>$spchome]);
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

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.index');
});
route::get('TrangChu','homeController@index');
route::get('gioithieu','homeController@gioithieu');
route::get('blog','TinTucController@TinTuc');
route::get('blog/chitiet/{id}','TinTucController@getChitietTinTuc');
//route::get('blog/xemnhieu/{id}','TinTucController@getChitietTinTuc');
route::get('sanpham/{id}','homeController@sanpham');
route::get('sanphamchobe','homeController@sanphamchobe');
route::get('sanphamchome','homeController@sanphamchome');
route::get('lienhe','homeController@lienhe');
route::get('giohang','homeController@giohang');
route::get('thanhtoan','homeController@thanhtoan');
route::get('thanhtoanhoantat','homeController@thanhtoanhoantat');
//
route::post('lienhe/them','LienHeController@postThem');
route::post('tuvan/them','TuVanController@postThem');
route::post('nhantin/them','TuVanController@postNhanTin');
//
route::group(['prefix'=>'cart'],function(){
    route::get('add/{id}','cartController@getAddCart');
    route::get('show','cartController@getShowCart');
    route::get('delete/{id}','cartController@getDeleteCart');
    route::get('update','cartController@getUpdateCart');
    route::get('pay','cartController@getPayCart');
    route::post('dathang','cartController@postCheckout');
    route::get('slide/add/{id}','cartController@getSlideAddCart');
});
///
route::get('admin/dangnhap','UserController@getDangnhapAdmin');
route::post('admin/dangnhap','UserController@postDangnhapAdmin');
//
route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    route::get('trangchu','UserController@getTrangChu');
    route::get('logout','UserController@getLogout');
    route::group(['prefix'=>'loaisanpham'],function(){
        route::get('danhsach','LoaiSanPhamController@getDanhSach');
        route::get('sua/{id}','LoaiSanPhamController@getSua');
        route::post('sua/{id}','LoaiSanPhamController@postSua');
        route::get('them','LoaiSanPhamController@getThem');
        route::post('them','LoaiSanPhamController@postThem');
        route::get('xoa/{id}','LoaiSanPhamController@getXoa');
    });
    //
    route::group(['prefix'=>'sanpham'],function(){
        route::get('danhsach','SanPhamController@getDanhSach');
        route::get('sua/{id}','SanPhamController@getSua');
        route::post('sua/{id}','SanPhamController@postSua');

        route::get('them','SanPhamController@getThem');
        route::post('them','SanPhamController@postThem');

        route::get('xoa/{id}','SanPhamController@getXoa');
    });
    //

    route::group(['prefix'=>'user'],function(){
        route::get('danhsach','UserController@getDanhSach');
        route::get('sua/{id}','UserController@getSua');
        route::post('sua/{id}','UserController@postSua');

        route::get('them','UserController@getThem');
        route::post('them','UserController@postThem');

        route::get('xoa/{id}','UserController@getXoa');
    });
     //
    route::group(['prefix'=>'donhang'],function(){
        route::get('danhsach','DonHangController@getDanhSach');
        route::get('chitiet/{id}','DonHangController@getChiTiet');
        route::get('xoa/{id}','DonHangController@getXoa');
        route::get('sua/{id}','DonHangController@getSua');
        route::post('sua/{id}','DonHangController@postSua');
    });
    route::group(['prefix'=>'khachhang'],function(){
        route::get('danhsach','DonHangController@getKhachHang');
        route::get('xoa/{id}','DonHangController@getXoa');
    });
    //
    route::group(['prefix'=>'slide'],function(){
        route::get('danhsach','SlideController@getDanhSach');
        route::get('sua/{id}','SlideController@getSua');
        route::post('sua/{id}','SlideController@postSua');
        route::get('them','SlideController@getThem');
        route::post('them','SlideController@postThem');
        route::get('xoa/{id}','SlideController@getXoa');
    });
     //
    route::group(['prefix'=>'doitac'],function(){
        route::get('danhsach','DoiTacController@getDanhSach');
        route::get('sua/{id}','DoiTacController@getSua');
        route::post('sua/{id}','DoiTacController@postSua');
        route::get('them','DoiTacController@getThem');
        route::post('them','DoiTacController@postThem');
        route::get('xoa/{id}','DoiTacController@getXoa');
    });
      //
    route::group(['prefix'=>'tintuc'],function(){
        route::get('danhsach','TinTucController@getDanhSach');
        route::get('chitiet/{id}','TinTucController@getChiTiet');
        route::get('them','TinTucController@getThem');
        route::post('them','TinTucController@postThem');
        route::get('xoa/{id}','TinTucController@getXoa');
        route::get('sua/{id}','TinTucController@getSua');
        route::post('sua/{id}','TinTucController@postSua');
    });
    route::group(['prefix'=>'lienhe'],function(){
        route::get('danhsach','LienHeController@getDanhSach');
        route::get('sua/{id}','LienHeController@getSua');
        route::post('sua/{id}','LienHeController@postSua');
        route::get('xoa/{id}','LienHeController@getXoa');

    });
});
////
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

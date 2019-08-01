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
route::get('blog','homeController@blog');
route::get('sanpham/{id}','homeController@sanpham');
route::get('sanphamchobe','homeController@sanphamchobe');
route::get('sanphamchome','homeController@sanphamchome');
route::get('lienhe','homeController@lienhe');
route::get('giohang','homeController@giohang');
route::get('thanhtoan','homeController@thanhtoan');
route::get('thanhtoanhoantat','homeController@thanhtoanhoantat');

//
route::group(['prefix'=>'cart'],function(){
    route::get('add/{id}','cartController@getAddCart');
    route::get('show','cartController@getShowCart');
    route::get('delete/{id}','cartController@getDeleteCart');
    route::get('update','cartController@getUpdateCart');
    route::get('pay','cartController@getPayCart');
    route::post('dathang','cartController@postCheckout');
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
});
////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

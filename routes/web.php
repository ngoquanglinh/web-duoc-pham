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
    return view('welcome');
});
route::get('index','homeController@index');
route::get('gioithieu','homeController@gioithieu');
route::get('blog','homeController@blog');
route::get('sanpham','homeController@sanpham');
route::get('sanphamchobe','homeController@sanphamchobe');
route::get('sanphamchome','homeController@sanphamchome');
route::get('lienhe','homeController@lienhe');
route::get('giohang','homeController@giohang');
route::get('thanhtoan','homeController@thanhtoan');
route::get('thanhtoanhoantat','homeController@thanhtoanhoantat');


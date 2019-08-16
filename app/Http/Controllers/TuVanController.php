<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tuvan;
use Mail;

class TuVanController extends Controller
{
    public function postThem(request $request)
    {
    	$this->validate($request,[
    		'name'=>'required|min:2',
    		'phone'=>'required|min:9',
    		'noidung'=>'required|min:3',
    	],[
    		'name.required'=>'Bạn chưa nhập họ tên',
    		'name.min'=>'Tên phải từ 2 ký tự trở lên',
    		'phone.required'=>'Bạn chưa nhập số điện thoại',
    		'phone.min'=>'số điện thoại có ít nhất 9 ký tự',
    		'noidung.required'=>'Bạn chưa nhập nội dung',
    		'noidung.min'=>'nội dung có ít nhất 3 ký tự',
    	]);
    	$tuvan=new tuvan;
    	$tuvan->HoTen=$request->name;
    	$tuvan->Phone=$request->phone;
    	$tuvan->NoiDung=$request->noidung;
    	$tuvan->save();
    	return back()->with('thongbao','Gửi yêu cầu thành công');
    }
    public function postNhanTin(request $request)
    {
        $this->validate($request,[
            'emailtuvan'=>'required',
        ],[
            'emailtuvan.required'=>'Bạn chưa nhập email',
        ]);
    	$data=$request->all();
    	$email=$request->emailtuvan;
    	Mail::send('layout.email',$data,function($message) use ($email){
    		$message->from($email,$email);
    		$message->to('ngolinh2197@gmail.com','linhngo');
    		$message->subject('Đăng ký nhận tin');
    	});
    	return back()->with('email','Gửi thành công');
    }
}

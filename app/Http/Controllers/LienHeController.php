<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lienhe;

class LienHeController extends Controller
{
    public function postThem(request $request)
    {
    	$this->validate($request,[
    		'name'=>'required|min:2',
    		'phone'=>'required|min:9',
    		'email'=>'required|email',
    		'chude'=>'required|min:3',
    		'noidung'=>'required|min:3',
    	],[
    		'name.required'=>'Bạn chưa nhập họ tên',
    		'name.min'=>'Tên phải từ 2 ký tự trở lên',
    		'phone.required'=>'Bạn chưa nhập số điện thoại',
    		'phone.min'=>'số điện thoại có ít nhất 9 ký tự',
    		'email.required'=>'Bạn chưa nhập email',
    		'email.email'=>'email chưa đúng định dạng',
    		'chude.required'=>'Bạn chưa nhập chủ đề',
    		'chude.min'=>'chủ đề có ít nhất 3 ký tự',
    		'noidung.required'=>'Bạn chưa nhập nội dung',
    		'noidung.min'=>'nội dung có ít nhất 3 ký tự',
    	]);
    	$lienhe=new lienhe;
    	$lienhe->HoTen=$request->name;
    	$lienhe->Phone=$request->phone;
    	$lienhe->Email=$request->email;
    	$lienhe->ChuDe=$request->chude;
    	$lienhe->NoiDung=$request->noidung;
    	$lienhe->save();
    	return redirect('lienhe')->with('thongbao','Gửi yêu cầu thành công');
    }
    public function getDanhsach(){
        $lienhe=lienhe::all();
        return view('admin.lienhe.danhsach',['lienhe'=>$lienhe]);
    }
    public function getSua($id){
        $lienhe=lienhe::find($id);
        return view('admin.lienhe.sua',['lienhe'=>$lienhe]);
    }
    public function postSua(request $request,$id){
        $lienhe=lienhe::find($id);
        $lienhe->TrangThai=$request->trangthai;
        $lienhe->save();
        return redirect('admin/lienhe/sua/'.$id)->with('thongbao','Bạn đã sửa thành công');
    }
      public function getXoa($id){
        $lienhe=lienhe::find($id);
        $lienhe->delete();
        return redirect('admin/lienhe/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}

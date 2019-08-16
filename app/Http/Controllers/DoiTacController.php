<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doitac;
class DoiTacController extends Controller
{
    public function getThem()
    {
    	return view('admin.doitac.them');
    }
    public function postThem(request $request)
    {
    	$this->validate($request,
			[
				'ten'=>'required|min:3|max:100',
			],[
				'ten.required'=>'Bạn chưa nhập tên sản phẩm',
				'ten.max'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
				'ten.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
			]);
		$doitac=new DoiTac;
		$doitac->ten=$request->ten;
		$doitac->Status=$request->status;
		if($request->hasFile('anh'))
		{
			$file=$request->file('anh');
			$duoi=$file->getClientOriginalExtension();
			if($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg'){
				return redirect('admin/slide/them')->with('loi','Ảnh phải có đuôi png,jpg,jpeg');
			}
			$name=$file->getClientOriginalName();
			$hinh=str_random(4)."_".$name;
			$file->move("uploads",$hinh);
			$doitac->anh=$hinh;
		}else{
			$doitac->anh="";
		}
		$doitac->save();
		return redirect('admin/doitac/them')->withInput()->with('thongbao','Thêm thành công');
    }
    public function getDanhSach(){
    	$doitac=doitac::all();
    	return view('admin.doitac.danhsach',['doitac'=>$doitac]);
    }
    public function getSua($id){
    	$doitac=doitac::find($id);
    	return view('admin.doitac.sua',['doitac'=>$doitac]);
    }
    public function postSua(request $request,$id){
    	$this->validate($request,
			[
				'ten'=>'required|min:3|max:100',
			],[
				'ten.required'=>'Bạn chưa nhập tên sản phẩm',
				'ten.max'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
				'ten.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
			]);
		$doitac=DoiTac::find($id);
		$doitac->ten=$request->ten;
		$doitac->Status=$request->status;
		if($request->hasFile('anh'))
        {
            $file=$request->file('anh');
            $duoi=$file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg'){
                return redirect('admin/doitac/them')->with('loi','Ảnh phải có đuôi png,jpg,jpeg');
            }
            $name=$file->getClientOriginalName();
            $hinh=str_random(4)."_".$name;
            $file->move("uploads",$hinh);
            unlink("uploads/".$doitac->anh);
            $doitac->anh=$hinh;
            }
        $doitac->save();
        return redirect('admin/doitac/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
    	$doitac=doitac::find($id);
    	$doitac->delete();
    	return redirect('admin/doitac/danhsach')->with('thongbao','Xóa slide thành công');
    }
}

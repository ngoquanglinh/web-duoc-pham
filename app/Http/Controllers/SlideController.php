<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
class SlideController extends Controller
{
	public function getDanhSach()
	{
		$slide=slide::all();
		return view('admin.slide.danhsach',['slide'=>$slide]);
	}
	public function getThem()
	{
		return view('admin.slide.them');
	}
	public function postThem(Request $request)
	{
		$this->validate($request,
			[
				'ten'=>'required|min:3|max:100|unique:slide,TenSlide',
				'gia'=>'required',
			],[
				'ten.required'=>'Bạn chưa nhập tên sản phẩm',
				'ten.max'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
				'ten.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
				'ten.unique'=>'Tên sản phẩm đã  tồn tại',
				'gia.required'=>'Bạn chưa nhập giá',
			]);
		$slide=new slide;
		$slide->TenSlide=$request->ten;
		$slide->Gia=$request->gia;
		$slide->SPKhuyenMai=$request->spkm;
		$slide->GiaKhuyenMai=$request->giakm;
		$slide->Status=$request->status;
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
			$slide->link=$hinh;
		}else{
			$slide->link="";
		}
		$slide->save();
		return redirect('admin/slide/them')->withInput()->with('thongbao','Thêm thành công');
	}
	public function getSua($id){
		$slide=slide::find($id);
		return view('admin.slide.sua',['slide'=>$slide]);
	}
	public function postSua(request $request,$id){
		$this->validate($request,
			[
				'ten'=>'required|min:3|max:100',
				'gia'=>'required',
			],[
				'ten.required'=>'Bạn chưa nhập tên sản phẩm',
				'ten.max'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
				'ten.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
				'gia.required'=>'Bạn chưa nhập giá',
			]);
		$slide=slide::find($id);
		$slide->TenSlide=$request->ten;
		$slide->Gia=$request->gia;
		$slide->SPKhuyenMai=$request->spkm;
		$slide->GiaKhuyenMai=$request->giakm;
		$slide->Status=$request->status;
		if($request->hasFile('anh'))
        {
            $file=$request->file('anh');
            $duoi=$file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg'){
                return redirect('admin/sanpham/them')->with('loi','Ảnh phải có đuôi png,jpg,jpeg');
            }
            $name=$file->getClientOriginalName();
            $hinh=str_random(4)."_".$name;
            $file->move("uploads",$hinh);
            unlink("uploads/".$slide->link);
            $slide->link=$hinh;
            }
        $slide->save();
        return redirect('admin/slide/sua/'.$id)->with('thongbao','Sửa thành công');
	}
	public function getXoa($id){
		$slide=slide::find($id);
		$slide->delete();
		return redirect('admin/slide/danhsach')->with('thongbao','Xóa slide thành công');
	}
}

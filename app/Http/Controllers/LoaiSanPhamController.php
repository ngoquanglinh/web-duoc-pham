<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaisanpham;

class LoaiSanPhamController extends Controller
{
    public function getDanhSach()
    {   
        $loaisanpham=loaisanpham::all();
        return view('admin.loaisanpham.danhsach',['loaisanpham'=>$loaisanpham]); 
    }
    public function getSua($id)
    {
        $loaisanpham=loaisanpham::find($id);
        return view('admin.loaisanpham.sua',['loaisanpham'=>$loaisanpham]);
    }
    public function postSua(request $request,$id)
    {
        $loaisanpham=loaisanpham::find($id);
        $this->validate($request,
        [
            'ten'=>'required|min:3|max:100|unique:loaisanpham,TenLoaiSP',
        ],
        [
            'ten.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'ten.max'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
            'ten.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
            'ten.unique'=>'Tên loại đã tồn tại',
        ]);
        $loaisanpham->TenLoaiSP=$request->ten;
        $loaisanpham->save();
        return redirect('admin/loaisanpham/sua/'.$id)->with('thongbao','Bạn đã sửa thành công');
    }
    public function getThem()
    {
        return view('admin.loaisanpham.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
        [
            'ten'=>'required|min:3|max:100',
        ],
        [
            'ten.required'=>'Bạn chưa nhập tên loại sản phẩm',
            'ten.max'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
            'ten.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
        ]);
        $loaisanpham=new loaisanpham;
        $loaisanpham->TenLoaiSP=$request->ten;
        $loaisanpham->save();
        return redirect('admin/loaisanpham/them')->with('thongbao','Thêm thành công');
    }
    public function getXoa($id)
    {
        $loaisanpham=loaisanpham::find($id);
        $loaisanpham->delete();
        return redirect('admin/loaisanpham/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}

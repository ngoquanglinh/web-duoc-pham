<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\loaisanpham;
class SanPhamController extends Controller
{
    public function getDanhSach()
    {   
        $sanpham=sanpham::all();
        return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]); 
    }
    public function getSua($id)
    {
        $sanpham=sanpham::find($id);
        $loaisanpham=loaisanpham::all();
        return view('admin.sanpham.sua',['sanpham'=>$sanpham,'loaisanpham'=>$loaisanpham]);
    }
    public function postSua(request $request,$id)
    {
        $this->validate($request,
        [
            'tensp'=>'required|min:3|max:100',
            'gia'=>'required',
            'video'=>'required',
            'mota'=>'required',
            'motangan'=>'required',

        ],
        [
            'tensp.required'=>'Bạn chưa nhập tên sản phẩm',
            'tensp.max'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
            'tensp.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
            'gia.required'=>'Bạn chưa nhập giá',
            'mota.required'=>'Bạn chưa thêm mô tả',
            'motangan.required'=>'Bạn chưa thêm mô tả ngắn',
            'video.required'=>'Bạn chưa thêm link video',

        ]);
        $sanpham=sanpham::find($id);
        $sanpham->TenSP=$request->tensp;
        $sanpham->idLoaiSP=$request->lsp;
        $sanpham->Gia=$request->gia;
        $sanpham->GiaKhuyenMai=$request->giakm;
        $sanpham->LinkVideo=$request->video;
        $sanpham->SPKhuyenMai=$request->spkm;
        $sanpham->active=$request->active;
        $sanpham->SPMoi=$request->spmoi;
        $sanpham->status=$request->status;
        $sanpham->MoTa=$request->mota;
        $sanpham->MoTaNgan=$request->motangan;
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
            unlink("uploads/".$sanpham->ImageSP);
            $sanpham->ImageSP=$hinh;
            }
        $sanpham->save();
        return redirect('admin/sanpham/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getThem()
    {
        $loaisp=loaisanpham::all();
        return view('admin.sanpham.them',['loaisp'=>$loaisp]);
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
        [
            'tensp'=>'required|min:3|max:100|unique:sanpham,TenSP',
            'gia'=>'required',
            'video'=>'required',
            'mota'=>'required',
            'motangan'=>'required',

        ],
        [
            'tensp.required'=>'Bạn chưa nhập tên sản phẩm',
            'tensp.max'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
            'tensp.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
            'tensp.unique'=>'Tên sản phẩm đã  tồn tại',
            'gia.required'=>'Bạn chưa nhập giá',
            'mota.required'=>'Bạn chưa thêm mô tả',
            'motangan.required'=>'Bạn chưa thêm mô tả ngắn',
            'video.required'=>'Bạn chưa thêm link video',

        ]);
        $sanpham=new sanpham;
        $sanpham->TenSP=$request->tensp;
        $sanpham->idLoaiSP=$request->lsp;
        $sanpham->Gia=$request->gia;
        $sanpham->GiaKhuyenMai=$request->giakm;
        $sanpham->LinkVideo=$request->video;
        $sanpham->SPKhuyenMai=$request->spkm;
        $sanpham->active=$request->active;
        $sanpham->SPMoi=$request->spmoi;
        $sanpham->status=$request->status;
        $sanpham->MoTa=$request->mota;
        $sanpham->MoTaNgan=$request->motangan;
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
            $sanpham->ImageSP=$hinh;
        }else{
            $sanpham->ImageSP="";
        }
        $sanpham->save();
        return redirect('admin/sanpham/them')->withInput()->with('thongbao','Thêm thành công');
    }
    public function getXoa($id)
    {
        $sanpham=sanpham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}

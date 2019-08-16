<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hoadon;
use App\chitiethoadon;
use App\khachhang;
class DonHangController extends Controller
{
    public function getDanhSach(){
    	$hoadon=hoadon::all();
    	return view('admin.donhang.danhsach',['hoadon'=>$hoadon]);
    }
    public function getChiTiet($id){
    	$cthd=chitiethoadon::where('idHoaDon',$id)->get();
    	return view('admin.chitiethoadon.danhsach',['cthd'=>$cthd]);
    }
      public function getKhachHang(){
    	$khachhang=khachhang::all();
    	return view('admin.khachhang.danhsach',['khachhang'=>$khachhang]);
    }
     public function getSua($id){
    	$hoadon=hoadon::find($id);
    	return view('admin.donhang.sua',['hoadon'=>$hoadon]);
    }
     public function postSua(request $request,$id){
     	$hoadon=hoadon::find($id);
    	$hoadon->id=$request->id;
    	$hoadon->idKhachHang=$request->idkh;
    	$hoadon->NgayDat=$request->ngaydat;
    	$hoadon->TongTien=$request->tongtien;
    	$hoadon->ThanhToan=$request->thanhtoan;
    	$hoadon->GhiChu=$request->ghichu;
    	$hoadon->TrangThai=$request->trangthai;
    	$hoadon->save();
    	return redirect('admin/donhang/sua/'.$id)->with('thongbao','Sửa Thành Công');

    }
      public function getXoa($id){
    	$hoadon=hoadon::find($id);
    	$cthoadon=$hoadon->chitiethoadon()->get()->each->delete();
        $hoadon->delete();
    	$kh=$hoadon->khachhang()->get()->each->delete();
        
        return redirect()->back()->with('xoa','Xóa hóa đơn thành công');
    }
}

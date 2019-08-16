<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\sanpham;
use App\khachhang;
use App\hoadon;
use App\chitiethoadon;
use App\slide;
class cartController extends Controller
{
      function __construct(){
        $cartCollection = Cart::getContent();
        $cartcount=$cartCollection->count();
        view()->share('cartcount',$cartcount);
    }
    public  function getAddCart($id){
        $sanpham=sanpham::find($id);
        if($sanpham->SPKhuyenMai == 1){
            Cart::add(array(
                'id' =>$id,
                'name' =>$sanpham->TenSP,
                'price' =>$sanpham->GiaKhuyenMai,
                'quantity' =>1,
                'attributes' => array('img'=>$sanpham->ImageSP)
            )); 
        }
        else{
            Cart::add(array(
                'id' =>$id,
                'name' =>$sanpham->TenSP,
                'price' =>$sanpham->Gia,
                'quantity' =>1,
                'attributes' => array('img'=>$sanpham->ImageSP)
            )); 
        }
        return redirect('cart/show');
    }
    public function getShowCart(){
        $data['total']=Cart::getTotal();
        $data['items']=Cart::getContent();
        return view('layout.cart',$data);
    }
    public function getDeleteCart($id){
        Cart::remove($id);
        return back();
    }
    public function getUpdateCart(Request $request){
        Cart::update($request->id,array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qty,
            ),
          ));
    }
    public function getPayCart(){
        $data['items']=Cart::getContent(); 
        $data['total']=Cart::getTotal(); 
        return view('layout.pay',$data);
    }
    public function postCheckout(Request $req){
        $this->validate($req,[
         'name'=>'required|min:2',
         'email'=>'required|email',
         'address'=>'required|min:3',
         'phone'=>'required|min:8',
         'pay'=>'required',
        ],
        [
            'name.required'=>'Bạn Chưa Nhập Tên',
            'name.min'=>'Tên người dùng có ít nhất 2 ký tự',
            'email.required'=>'Bạn Chưa Nhập Email',
            'email.email'=>'Bạn Chưa Nhập Đúng Định Dạng Email',
            'address.required'=>'Bạn Chưa Nhập Địa Chỉ',
            'address.min'=>'Địa Chỉ có ít nhất 3 ký tự',
            'phone.required'=>'Bạn Chưa Nhập Email',
            'address.min'=>'Địa Chỉ có ít nhất 8 ký tự',
            'pay.required'=>'Bạn Chưa Chọn Hình Thức Thanh Toán'
        ]);
        $data=Cart::getContent();
        $totalcart=Cart::getTotal();
        $khachhang=new khachhang;
        $khachhang->Ten=$req->name;
        $khachhang->GioiTinh=$req->gioitinh;
        $khachhang->Email=$req->email;
        $khachhang->DiaChi=$req->address;
        $khachhang->Phone=$req->phone;
        $khachhang->GhiChu=$req->note;
        $khachhang-> save();
        $hoadon=new hoadon;
        $hoadon->idKhachHang=$khachhang->id;
        $hoadon->NgayDat=date('Y-m-d');
        $hoadon->TongTien=$totalcart;
        $hoadon->ThanhToan=$req->pay;
        $hoadon->GhiChu=$req->note;
        $hoadon->save();
        foreach($data as $sp){
        $cthd=new chitiethoadon;
        $cthd->idHoaDon=$hoadon->id;
        $cthd->idSanPham=$sp->id;
        $cthd->SoLuong=$sp->quantity;
        $cthd->DonGia=$sp->price;
        $cthd->save();
        }
        Cart::clear();
        $idhd=hoadon::where('id',$hoadon->id)->first();
        return view('layout.payCompleted',['idhd'=>$idhd]);
        // ->with('thongbao','Đặt Hàng Thành Công');
    }
    public function getSlideAddCart($id){
        $slide=slide::find($id);
        if($slide->SPKhuyenMai == 1){
            Cart::add(array(
                'id' =>$id,
                'name' =>$slide->TenSlide,
                'price' =>$slide->GiaKhuyenMai,
                'quantity' =>1,
                'attributes' => array('img'=>$slide->link)
            )); 
        }
        else{
            Cart::add(array(
                'id' =>$id,
                'name' =>$slide->TenSlide,
                'price' =>$slide->Gia,
                'quantity' =>1,
                'attributes' => array('img'=>$slide->link)
            )); 
        }
        return redirect('cart/show');
    }
}

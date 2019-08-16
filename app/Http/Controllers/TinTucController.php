<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use DB;
class TinTucController extends Controller
{
    public function getThem()
    {
        return view('admin.tintuc.them');
    }
    public function postThem(request $request)
    {

        $this->validate($request,
            [
                'ten'=>'required|min:3|max:100',
                'noidung'=>'required',
                'tomtat'=>'required',
            ],
            [
                'ten.required'=>'Bạn chưa nhập tên sản phẩm',
                'ten.max'=>'Tên loại sẩm từ 3 đến 100 ký tự',
                'ten.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
                'noidung.required'=>'Bạn chưa thêm nội dung',
                'tomtat.required'=>'Bạn chưa thêm tóm tắt',

            ]);
        $tintuc=new tintuc;
        $tintuc->TenTT=$request->ten;
        $tintuc->Status=$request->status;
        $tintuc->NguoiDang=$request->nguoidang;
        $tintuc->NoiDung=$request->noidung;
        $tintuc->TomTat=$request->tomtat;
        $tintuc->NgayDang=date('y-m-d');
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
            $tintuc->Anh=$hinh;
        }else{
            $tintuc->Anh="";
        }
        $tintuc->save();
        return redirect('admin/tintuc/them')->withInput()->with('thongbao','Thêm thành công');
    }
    public function getDanhSach(){
        $tintuc =tintuc::all();
        return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);
    }
    public function getSua($id){
        $tintuc=tintuc::find($id);
        return view('admin.tintuc.sua',['tintuc'=>$tintuc]);
    }
    public function postSua(request $request,$id){
        $this->validate($request,
         [
            'ten'=>'required|min:3|max:100',
            'noidung'=>'required',
            'tomtat'=>'required',
        ],
        [
            'ten.required'=>'Bạn chưa nhập tên sản phẩm',
            'ten.max'=>'Tên loại sẩm từ 3 đến 100 ký tự',
            'ten.min'=>'Tên loại sản phẩm từ 3 đến 100 ký tự',
            'noidung.required'=>'Bạn chưa thêm nội dung',
            'tomtat.required'=>'Bạn chưa thêm tóm tắt',

        ]);
        $tintuc=tintuc::find($id);
        $tintuc->TenTT=$request->ten;
        $tintuc->NguoiDang=$request->nguoidang;
        $tintuc->NgayDang=$request->ngaydang;
        $tintuc->Status=$request->status;
        $tintuc->NoiDung=$request->noidung;
        $tintuc->TomTat=$request->tomtat;
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
            unlink("uploads/".$tintuc->Anh);
            $tintuc->Anh=$hinh;
        }
        $tintuc->save();
        return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
        $tintuc=tintuc::find($id);
        $tintuc->delete();
        return redirect("admin/tintuc/danhsach")->with('thongbao','xóa tin tức thành công');
    }
    public function TinTuc(){
        $tintuc=tintuc::where('Status',1)->paginate(3);
        $tinxemnhieu=DB::table('tintuc')->orderBy('luotXem','DESC')->take(3)->get();
        return view('layout.blog',['tintuc'=>$tintuc,'xemnhieu'=>$tinxemnhieu]);
    }
    public function getChitietTinTuc($id){
        $tintuc=tintuc::find($id);
         $tinxemnhieu=DB::table('tintuc')->orderBy('luotXem','DESC')->take(3)->get();
        $tintuc->luotXem +=1;
        $tintuc->save();
        return view('layout.tintuc',['tintuc'=>$tintuc,'xemnhieu'=>$tinxemnhieu]);
    }
}

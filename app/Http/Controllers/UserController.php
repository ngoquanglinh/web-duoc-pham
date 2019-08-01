<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
class UserController extends Controller
{
    public function getdanhsach(){
    	$user=user::all();
    	return view('admin.user.danhsach',['user'=>$user]);
    }
    public function getThem(){
    	return view('admin.user.them');
    }
    public function postThem(request $request){
    	$this->validate($request,[
    		'name'=>'required|min:3',
    		'email'=>'required|email|unique:users,email',
    		'password'=>'required|min:3|max:32',
    		'password_again'=>'required|same:password',
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên người dùng',
    		'name.min'=>'Tên người dùng có ít nhất 3 ký tự',
    		'email.required'=>'Bạn chưa nhập email',
    		'email.email'=>'Bạn chưa nhập  đúng định dạng email',
    		'email.unique'=>'Email đã tồn tại',
    		'password.required'=>'Bạn chưa nhập password',
    		'password.min'=>'password có ít nhất 3 ký tự',
    		'password.max'=>'password có nhiều nhất 32 ký tự',
    		'password_again.required'=>'Bạn chưa nhập lại password',
    		'password_again.same'=>'password nhập lại chưa chính xác',
    	]);
    	$user=new User;
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=bcrypt($request->password);
    	$user->save();
    	return redirect('admin/user/danhsach')->withInput()->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
    	$user=user::find($id);
    	return view('admin.user.sua',['user'=>$user]);
    }
    public function postSua(request $request,$id){
    	$this->validate($request,[
    		'name'=>'required|min:3',
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên người dùng',
    		'name.min'=>'Tên người dùng có ít nhất 3 ký tự',
    	]);
    	$user=User::find($id);
    	$user->name=$request->name;
    	$user->email=$request->email;
    	if($request->changePassword == "on"){
    			$this->validate($request,[
    		'password'=>'required|min:3|max:32',
    		'password_again'=>'required|same:password',
    	],
    	[
    		'password.required'=>'Bạn chưa nhập password',
    		'password.min'=>'password có ít nhất 3 ký tự',
    		'password.max'=>'password có nhiều nhất 32 ký tự',
    		'password_again.required'=>'Bạn chưa nhập lại password',
    		'password_again.same'=>'password nhập lại chưa chính xác',
    	]);
    		$user->password=bcrypt($request->password);
    	}
    	$user->save();
    	return redirect('admin/user/sua/'.$id)->withInput()->with('thongbao','Sửa thành công');
    }
     public function getXoa($id){
     	$user=user::find($id);
     	$user->delete();
     	return redirect('admin/user/danhsach')->with('thongbao','Xóa người dùng thành công');

    }
    public function getDangnhapAdmin(){
        return view('admin.login');
    }
    public function getTrangChu(){
        return view('admin.layout.index');
    }
     public function postDangnhapAdmin(request $request){
        $this->validate($request,[
            'Email'=>'required',
            'Password'=>'required|min:3|max:32',
        ],[
            'Email.required'=>'Bạn chưa nhập email',
            'Password.required'=>'Bạn chưa nhập password',
            'Password.min'=>'Password không được nhỏ hơn 3 ký tự',
            'Password.max'=>'Password không được lớn hơn 32 ký tự',
        ]);
        if(Auth::attempt(['email'=>$request->Email,'password'=>$request->Password]))
        {
            return redirect('admin/trangchu');
        }else
        {
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public  function getLogout(){
        Auth::logout();
        return redirect('admin/dangnhap');
    }

}
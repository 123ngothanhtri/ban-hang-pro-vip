<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function adminLogin(){
        return view('admin.admin_login');
    }
    function adminLoginX(Request $req){
        if(Auth::guard('admin')->attempt(['email'=>$req->email,'password'=>$req->password]))
        {
            return redirect('/dashboard')->with('msg','Đăng nhập thành công');
        }
        else {
            return back()->with('er','Sai tài khoản mật khẩu');
        }
     }
    function adminLogout(){
        Auth::guard('admin')->logout();
        return view('admin.admin_login');
    }
    function myAdmin(){
        //$ad=Auth::guard('admin')->user();
        return view('admin.admin');
    }

    function changePassword(Request $req){
        $pw = Admin::find($req->id);
        // if($dmk->password==$r->ipmkc){
        //      $dmk->password= bcrypt($r->ipmkm);
        //      $dmk->save();
        //      return back()->with('ss','Đổi mật khẩu thành công');
        // }
        // else{
        //     return back()->with('ss','Đổi mật khẩu thất bại');
        // }
        $pw->password = bcrypt($req->password);
        $pw->save();
        return back()->with('msg','Đổi mật khẩu thành công');
    }
    function changeAvatarAdmin(Request $req){
        $ad = Admin::find(Auth::guard('admin')->user()->id);
        $ad->avatar = $req->avatar;
        $ad->save();
        return back()->with('msg','Ảnh đã được cập nhật');
    }
    function changeNameAdmin(Request $req){
        $ad = Admin::find(Auth::guard('admin')->user()->id);
        $ad->name = $req->name;
        $ad->save();
        return back()->with('msg','Tên đã được cập nhật');
    }
}

<?php

namespace App\Http\Controllers;


use App\Http\Requests\ValidateRequest;
use Illuminate\Http\Request;
use DB;
use Auth;
use MongoDB\Driver\Session;


class Admin extends Controller
{
    public function getLogin(){
        return view('admin.login');
    }

    public function postLogin(ValidateRequest $request){
        $user = $request->user;
        $password = $request->password;

        $arr = ['name'=>$user, 'password'=>$password];
        if(Auth::attempt($arr)){
//                Session::put('username',$user);
                return view('admin.master_layout');
        }
        else{
            return redirect()->back()->with('messeger','Đăng nhập không thành công !');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function getViewAdmin(){
        return view('admin.master_layout');
    }
}

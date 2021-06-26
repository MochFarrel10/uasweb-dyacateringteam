<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function LoginPage(){
        return view('admin/login');
    }

    public function PostLogin(Request $request){
        if(Auth::attempt($request -> only('email', 'password'))){
            return redirect('/admin');
        }else{
            return view('admin/login');
        }
    }

    public function Logout(){
        Auth::logout();
        return view('admin/login');
    }
}

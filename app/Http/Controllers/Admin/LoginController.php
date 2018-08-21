<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('backend.Auth.login');
    }

    public function postLogin(Request $request){
    	$arr = [
    		'email'=>$request->email,
    		'password'=>$request->password,
    	];
    	if($request->remember = 'Ghi nhớ'){
    		$remember = true;
    	}else{
    		$remember = false;
    	}

    	if(Auth::attempt($arr)){
    		if(Auth::user()->user_level == 1){
    		  return redirect()->intended('admin/home');
            }
    	}else{
    		return back()->withInput()->with('error', 'Sai mật khẩu hoặc password!');
    	}
    }
}

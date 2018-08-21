<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function getHome(){
    	return view('backend.Home.index');
    }
    
    public function getLogout(){
    	if(Auth::user()->user_level == '1'){
	    	Auth::logout();
	    	return redirect()->intended('admin/login');
        }
    }
}

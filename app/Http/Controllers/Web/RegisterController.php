<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Mail;
use DB;

class RegisterController extends Controller
{
    public function getRegister(){
    	return view('frontend.Auth.register');
    }

    public function postRegister(RegisterRequest $request){
    	$user = new Users;
    	$arr['user_name'] = $request->name;
    	$arr['email'] = $request->email;
    	if($request->password1 == $request->password2){
    		$arr['password'] = Hash::make($request->password1);
    	}else{
    		return back()->withInput()->with('error', 'Mật khẩu không khớp nhau!');
    	}
    	if($request->img){
    		$filename = $request->img->getClientOriginalName();
    		$arr['user_img'] = $filename;
    		$request->img->move('storage/avatar', $filename);
    	}else{
    		$arr['user_img'] = '12.jpg';
    	}
    	$arr['user_level'] = '3';
        $arr['token'] = str_random(40);
        $arr['status'] = '0';
        $email = $request->email;
        // dd($arr);
        Mail::send('frontend.Email.email', $arr, function ($message) use($email){
            $message->from('www.nguyentkhiem96@gmail.com', 'NguyenThanhKhiem');

            $message->to($email, $email);

            // $message->cc('nguyenthanhkhiem81196@gmail.com', 'NguyenThanhKhiem');

            $message->subject('Xác nhận đăng ký từ Media Portal');
        });


    	$user::insert($arr);
        flash('Bạn check mail để tiếp tục')->success();
    	return redirect()->intended('register');

    }
    
    public function getCheckMail($user_mail, $token){
        $count = Users::where('email', '=', $user_mail)->where('token', '=', $token)->update(['status' => 1]);
        
        
        flash('Đăng ký thành công - Bạn cần đăng nhập để tiếp tục')->success();
        return redirect()->intended('login');
    }
}

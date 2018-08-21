<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'mp_users';
    protected $primaryKey = 'user_id';
    protected $guarded = ['user_name', 'email', 'password', 'user_img', 'user_level', 'token', 'status', 'created_id', 'updated_id', 'deleted_id'];

    public static function getAdmin(){
    	$admin = self::select('*')
    	->where('user_level', 1)
    	->orderBy('user_id', 'DESC')
    	->get();
    	if(empty($admin)){
    		return [];
    	}
    	return $admin;
    } 

    public static function updateAdmin($request, $id){
    	$updateAdmin = Users::find($id);
    	return $updateAdmin->update($request);
    }

    public static function getUsers(){
    	$users = self::select('*')
    	->where('user_level', '>', 1)
    	->orderBy('user_id', 'DESC')
    	->get();
    }


}

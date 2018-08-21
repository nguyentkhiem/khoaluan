<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'login'], function (){
	Route::get('/', 'Web\LoginUserController@getLogin')->name('loginUser');
	Route::post('/', 'Web\LoginUserController@postLogin');
});

Route::get('register', 'Web\RegisterController@getRegister');
Route::post('register', 'Web\RegisterController@postRegister');
Route::get('checkmail/{user_mail}/{token}', 'Web\RegisterController@getCheckMail')->name('checkmail');


Route::group(['namespace'=>'Admin'], function (){
	Route::group(['prefix'=>'admin'], function (){
		Route::get('login', 'LoginController@getLogin')->middleware('CheckLogin')->name('login');
		Route::post('login', 'LoginController@postLogin');
	});

	Route::get('logout', 'HomeController@getLogout');

	Route::group(['prefix'=>'admin'], function (){
		Route::get('home', 'HomeController@getHome')->middleware('CheckLogout');

		Route::resource('administrator', 'AdministratorController');
	});

});


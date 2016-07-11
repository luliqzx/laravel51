<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('home');
});


Route::post('prosestambah', 'CrudController@tambahdata');

Route::get('read', 'CrudController@lihatdata');

Route::get('hapus/{id}', 'CrudController@hapusdata');

Route::get('formedit/{id}', 'CrudController@editdata');

Route::post('prosesedit', 'CrudController@proseseditdata');

Route::get('login',function(){
	return view('login');
});

Route::get('register',function(){
	return view('register');
});

Route::post('tambahlogin', 'CrudController@tambahlogin');

Route::post('login', 'CrudController@login');


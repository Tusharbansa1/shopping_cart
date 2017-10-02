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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function(){
	return view('layouts.index');
});


Route::get('/register', function(){
	return view('layouts.register');
});

Route::get('/checkout' , function(){
	return view('layouts.checkout');
});


Route::get('/cart' , function(){
	return view('layouts.cart');
});

Route::get('/contact' , function(){
	return view('layouts.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

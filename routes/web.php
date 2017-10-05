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
    return view('layouts.index');
});

Route::get('/index', function(){
	return view('layouts.index');
});


Route::get('/register', function(){
	return view('layouts.register');
});

Route::get('/checkout' , 'userscontrol@checkout')->middleware('authenticated');


Route::get('/contact' , 'userscontrol@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/product_detail' , function(){
	return view('layouts.product_detail');
});

// group of route thats it 
Route::group(['middleware' => 'authenticated'] ,function(){

Route::get('/products' , 'userscontrol@products');

Route::get('/cart' , 'userscontrol@cart');


Route::get('/profile/{username}' , 'userscontrol@profile');
});


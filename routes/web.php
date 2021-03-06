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
    return view('theme/index');
});

Auth::routes();


Route::group(['middleware' =>['auth']], function(){
	Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');
	Route::get('/admin/home', 'Admin\AdminController@index')->name('dashboard')->middleware('customer');
	Route::post('/ajaxBook', 'Admin\AdminController@ajaxBooking');
	Route::get('/ajaxHall', 'Admin\AdminController@ajaxGetHall');
});

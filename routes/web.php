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

Route::get('landing',function(){
	return view('landing');
});

Route::get('/test1',function(){
	return "welcome";
});
Route::get('/test2/{id}',function($id){
	return "$id";
})->name('a');
Route::get('/test3/{id?}',function(){
	return "well";
})->name('b');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

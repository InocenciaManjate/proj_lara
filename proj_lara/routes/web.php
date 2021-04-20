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



Route::get('/','CreatesController@home');
Route::get('/recluso', function(){
	return view('recluso');

});


Route::get('/','guardasController@home')
Route::get('/guarda', function(){
	return view('guarda');

});

Route::post('/insert','CreatesController@add');
Route::post('/insert','guardasController@add');
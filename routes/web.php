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
	$datas = App\Biodata::all();
    return view('index', compact('datas'));
});


Route::group(['middleware' => 'web'], function(){
    Route::resource('/admin', 'BiodataController');    
});
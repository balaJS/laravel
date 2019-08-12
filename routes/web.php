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

// Custom routes
Route::get('/table', function() {
	return view('table', ['tableName' =>  'Unknow']);
});
Route::get('/table/{name}', function($name = '') {
	return view('table', ['tableName' => $name]);
});

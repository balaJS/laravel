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

Route::get('/admin/login', 'Auth@login_form');

Route::post('/admin/login','Auth@login');

Route::any('/admin/logout', 'Auth@logout');

Route::get('/admin/profile', 'Auth@show_profile');

Route::resource('/admin/users', 'SiteUserController');

// Route::get('/admin/user/list', function () {
//     return view('admin/user/list', ['title'=> 'User list', 'pageClass'=> 'user-list']);
// });

// Route::group(['prefix' => 'admin'], function() {
//     Auth::routes();
// });
// Route::get('/home', 'HomeController@index')->name('home');

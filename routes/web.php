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

// Route::get('/admin/home', function () {
//     return view('admin.home');
// });

// Route::get('/admin/login', function () {
//     return view('admin.login');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin','prefix'=>'admin'],function(){
    
    Route::get('/home', 'HomeController@index')->name('dashboard');
    // Permission Routes
    Route::resource('permission','PermissionController');
    // Role Routes
    Route::resource('role','RoleController');
    // User Routes
    Route::resource('user','UserController');
    // Post Routes
    Route::resource('post','PostController');
    // Tag Routes
    Route::resource('tag','TagController');
    // Category Routes
    Route::resource('category','CategoryController');

    Route::get('login','Auth\LoginController@showLoginForm')->name('admin.login');

    Route::post('login', 'Auth\LoginController@login');

});
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','Auth\LoginController@userlogout');
Route::resource('category','CategoryController');
Route::prefix('admin')->group(function()
{
Route::get('/login','Auth\AdminLoginController@index')->name('signup');
Route::post('/submit','Auth\AdminLoginController@login')->name('check');
Route::get('/logout','Auth\AdminLoginController@logout');
Route::get('/','AdminController@index')->name('dashboard');
});

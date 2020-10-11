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



Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about_us', 'HomeController@about_us')->name('about_us');
Route::get('/contact_us', 'HomeController@contact_us')->name('contact_us');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog_detail', 'HomeController@blog_detail')->name('blog_detail');

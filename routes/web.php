<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PostController@home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/allPost','PostController@allPost')->name('posts');
Route::post('/admin/createPost','PostController@createPost')->name('createPosts');
Route::get('/admin','PostController@admin')->name('admin');
Route::get('/admin/vedio/{id}','PostController@vedio')->name('vedio');
Route::get('/admin/photo/{id}','PostController@photo')->name('photo');
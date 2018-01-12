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

use App\Post;
use App\Logout;

Route::get('/', 'PostController@index')->name('pocetna');


Route::get('/show/{id}', 'PostController@show');
Route::post('/create', 'PostController@store')->middleware('auth');
Route::get('/create', 'PostController@create')->middleware('auth');
Route::get('/post/delete/{id}', 'PostController@destroy')->middleware('auth');
Route::patch('/post/update/{id}', 'PostController@update')->middleware('auth');
Route::post('/show/{post}/comments', 'CommentController@store')->middleware('auth');


Route::get('/tags/{tag}','TagController@show');
Route::post('/tag/create', 'TagController@store')->middleware('auth');
Route::get('/tag/create', 'TagController@create')->middleware('auth');
Route::get('/tag/delete/{id}', 'TagController@destroy')->middleware('auth');
Route::patch('/tag/update/{id}', 'TagController@update')->middleware('auth');

Route::get('/category/{category}','CategoryController@show');
Route::post('/ctg/create', 'CategoryController@store')->middleware('auth');
Route::get('/ctg/create', 'CategoryController@create')->middleware('auth');
Route::get('/ctg/delete/{id}', 'CategoryController@destroy')->middleware('auth');
Route::patch('/ctg/update/{id}', 'CategoryController@update')->middleware('auth');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

Auth::routes();

Route::get('/admin', 'AdminController@index');
Route::get('/admin/posts', 'AdminController@posts');
Route::get('/admin/posts/add', 'AdminController@addpost');
Route::get('/admin/categories/add', 'AdminController@addcategory');
Route::get('/admin/tags/add', 'AdminController@addtag');
Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/post/edit/{id}', 'PostController@edit');
Route::get('/admin/tag/edit/{id}', 'TagController@edit');
Route::get('/admin/category/edit/{id}', 'CategoryController@edit');
Route::get('/profile', 'ProfileController@index');


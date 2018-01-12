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

Route::group(['middleware' => 'can:admin-access'], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/posts', 'AdminController@posts');
    Route::get('/admin/posts/add', 'AdminController@addpost');
    Route::get('/admin/categories/add', 'AdminController@addcategory');
    Route::get('/admin/tags/add', 'AdminController@addtag');
    Route::get('/admin/users', 'AdminController@users');
    Route::get('/admin/post/edit/{id}', 'PostController@edit');
    Route::get('/admin/tag/edit/{id}', 'TagController@edit');
    Route::get('/admin/category/edit/{id}', 'CategoryController@edit');
    Route::get('/admin/theme', 'AdminController@theme');
});

Route::group(['middleware' => 'can:moderator-access'], function () {
    Route::post('/create', 'PostController@store');
    Route::get('/create', 'PostController@create');
    Route::get('/post/delete/{id}', 'PostController@destroy');
    Route::patch('/post/update/{id}', 'PostController@update');

    Route::post('/tag/create', 'TagController@store');
    Route::get('/tag/create', 'TagController@create');
    Route::get('/tag/delete/{id}', 'TagController@destroy');
    Route::patch('/tag/update/{id}', 'TagController@update');

    Route::post('/ctg/create', 'CategoryController@store');
    Route::get('/ctg/create', 'CategoryController@create');
    Route::get('/ctg/delete/{id}', 'CategoryController@destroy');
    Route::patch('/ctg/update/{id}', 'CategoryController@update');
});

Route::group(['middleware' => 'can:user-access'], function () {
    Route::post('/show/{post}/comments', 'CommentController@store');
    Route::get('/profile', 'ProfileController@index');
    Route::get('/profile/edit', 'ProfileController@edit');
    Route::patch('/profile/update', 'ProfileController@update');
});

Route::get('/show/{id}', 'PostController@show');
Route::get('/tags/{tag}', 'TagController@show');
Route::get('/category/{category}', 'CategoryController@show');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Auth::routes();


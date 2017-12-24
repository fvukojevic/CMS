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
Route::get('/category/{category}','CategoryController@show');
Route::get('/tags/{tag}','TagController@show');


Route::post('/create', 'PostController@store')->middleware('auth');
Route::get('/create', 'PostController@create')->middleware('auth');

Route::get('/post', function(){
    return view('posts.create');
})->middleware('auth');

Route::post('/show/{post}/comments', 'CommentController@store')->middleware('auth');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

Auth::routes();


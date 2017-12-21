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

Route::get('/users', function()
{
    return View('smece.users');
});

Route::get('/post/{id}', 'PostController@post');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

Auth::routes();


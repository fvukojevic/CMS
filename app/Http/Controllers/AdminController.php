<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $numofPosts = Post::count();
        $numofComments = Comment::count();
        $numofUsers = User::count();
        $numOfCategories = Category::count();
        return view('admin.index', compact('numofPosts', 'numofComments', 'numofUsers', 'numOfCategories'));
    }

    public function posts(){
        $posts = Post::get()->all();
        return view('admin.posts', compact('posts'));
    }
    public function users(){
        $users = User::get()->all();
        return view('admin.users', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year','month')->get()->toArray();
        $posts = $category->posts()->paginate(5);
        return view('posts.index',compact('posts', 'archives'));
    }
}

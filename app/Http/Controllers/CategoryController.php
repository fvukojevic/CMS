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

    public function create()
    {
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year','month')->get()->toArray();
        return view('category.create', compact('archives'));
    }

    public function store(){

        $category = new Category;

        $this->validate(request(),[

            'name' => 'required'
        ]);

        $category->name = request('name');
        $category->save();
        //Post::create($post);

        return redirect('/');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;

class TagController extends Controller
{
    public function show(Tag $tag)
    {
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year','month')->get()->toArray();
        $posts = $tag->posts()->paginate(5);
        return view('posts.index',compact('posts', 'archives'));
    }

    public function create()
    {
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year','month')->get()->toArray();
        return view('tags.create', compact('archives'));
    }

    public function store(){

        $tag = new Tag;

        $this->validate(request(),[

            'name' => 'required'
        ]);

        $tag->name = request('name');
        $tag->save();
        //Post::create($post);

        return back();

    }

}

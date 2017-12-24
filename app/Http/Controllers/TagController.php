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
}

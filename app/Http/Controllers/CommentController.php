<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Post $post){

        $post->addComment(request('body'));
        return back();
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return back();

    }
}

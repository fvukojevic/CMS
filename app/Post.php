<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Post extends Model
{
    public function user(){

        return $this->belongsTo(User::class);
    }

    public function comments(){

        return $this->hasMany(Comment::class);

    }

    public function addComment($post) {

        $comment = new Comment();

        $comment->body = request('body');
        $comment->user_id = auth()->id();
        $comment->post_id = $this->id;
        $comment->save();

    }
    

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    protected $guarded = ['id'];

    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(5);

        if ($request = request(['month', 'year'])) {

            $month =  \request('month');
            $month = Carbon::parse($month)->month;
            $year =  \request('year');

            $posts = Post::whereMonth('created_at', $month)->whereYear('created_at', $year)->paginate(5);

            return view('posts.index', compact('posts'));
        }

        return view('posts.index', compact('posts'));
    }

    public function show($id){

        $post = Post::findOrFail($id);

        return view('posts.singlePost', compact('post'));
    }

    public function create(){

        return view('posts.create', compact('post'));
    }

    public function store(){

        $post = new Post;

        $this->validate(request(),[

            'title' => 'required',
            'body' => 'required'
        ]);

        $requestCategory = request('categories');
        $requestTag = request('selectedtags');
        $post->title = request('title');
        $post->body = request('body');
        $post->user_id = auth()->id();
        $post->save();
        $post->categories()->attach($requestCategory);
        $post->tags()->attach($requestTag);

        return back();

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        Session::flash('message', 'Objava uklonjena!');
        return back();

    }
}

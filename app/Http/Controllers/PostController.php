<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Collection;
use Carbon\Carbon;

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
        $this->middleware('auth', ['except' => ['index', 'post']]);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(5);
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year','month')->get()->toArray();

        if ($request = request(['month', 'year'])) {

            $month =  \request('month');
            $month = Carbon::parse($month)->month;
            $year =  \request('year');

            $posts = Post::whereMonth('created_at', $month)->whereYear('created_at', $year)->paginate(5);

            return view('posts.post', compact('posts', 'archives'));
        }

        return view('posts.post', compact('posts', 'archives'));
    }

    public function post($id){
        $post = Post::findOrFail($id);

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year','month')->get()->toArray();

        return view('posts.singlePost', compact('post', 'archives'));
    }

    public function create(){

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->groupBy('year','month')->get()->toArray();

        return view('posts.create', compact('post', 'archives'));
    }

    public function store(){

        $post = new Post;

        $this->validate(request(),[

            'title' => 'required',
            'body' => 'required'
        ]);

        $post->title = request('title');
        $post->body = request('body');
        $post->user_id = auth()->id();
        $post->save();
        //Post::create($post);

        return redirect('/');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

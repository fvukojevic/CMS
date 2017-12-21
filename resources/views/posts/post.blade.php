@extends('layouts.master')

@section('content')

    @foreach($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title">
            <a href="post/{{$post->id}}" class="blog-post-title">{{ $post->title }}</a>
            </h2>
            <p class="blog-post-meta">
                {{ $post->created_at->toFormattedDateString() }}, autor {{ $post->user->name }}

            </p>

            {{ $post->body }}

        </div>
        <hr>
    @endforeach
@stop
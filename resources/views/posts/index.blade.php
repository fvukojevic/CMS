@extends('layouts.master')

@section('content')

        @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title">
                    <a href="show/{{$post->id}}" class="blog-post-title">{{ $post->title }}</a>
                </h2>
                <p class="blog-post-meta">
                    {{ $post->created_at->toFormattedDateString() }}, autor <a href="#">{{ $post->user->name }}</a>
                    @if($post->categories()->count()>0)
                        , kategorije:
                        @foreach($post->categories->pluck('name') as $category)
                            <a href="#">{{ $category  }}</a>
                        @endforeach
                    @endif

                    @if($post->tags()->count()>0)
                        , oznake:
                        @foreach($post->tags->pluck('name') as $tag)
                            <a href="#">{{ $tag  }}</a>
                        @endforeach
                    @endif
                </p>
                    <p>
                        {{  str_limit($post->body, 500) }}
                    </p>
            </div>
            <hr>
        @endforeach
    <div class="text-center">
        {{ $posts->links() }}
    </div>
@endsection
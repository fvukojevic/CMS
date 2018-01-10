@extends('layouts.master')

@section('content')

    <h1>{{ $post->title }}</h1>

    <hr>

    {!! $post->body !!}

    <hr>

    <div class="comments">
        <ul class="list-group">

            @if($post->comments()->count()>0)

                @foreach($post->comments as $comment)
                    <li class="list-group-item">

                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>

                        {{ $comment->body }}

                    </li>
                @endforeach

            @else
                <li class="list-group-item">

                    <strong>
                        Još nema komentara. Budite prvi!
                    </strong>

                </li>
            @endif
        </ul>
    </div>
    @if (Auth::check())
        <hr>

        <div class="card">
            <div class="card-block" style="padding:15px;">
                <form method="POST" action="{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                            <textarea name="body" placeholder="Unesite komentar:" class="form-control"required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Objava</button>
                    </div>

                </form>
                @include('layouts.errors')
            </div>
        </div>
    @endif
@endsection
@extends('layouts.master')

@section('content')
    <!-- napraviti view koji ce se otvoriti kada korisnik udje u odredjenu objavu -->
    {{ $post->user->name }}
    {{ $post->title }}
    {{ $post->body }}
@endsection

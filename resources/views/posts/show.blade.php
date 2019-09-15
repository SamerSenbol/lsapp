@extends('layouts.app')
@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <a href="/posts" class ="btn btn-default">Go back</a>
@endsection

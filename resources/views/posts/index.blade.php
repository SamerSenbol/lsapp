@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    
    @if(count($posts) > 1)
        @foreach ($posts as $post)
            <div class="well">
                <h3>{{$post->title}}</h3>
                <small>written on{{$post->created_at}}</small>
            </div>
        @endforeach
    @else 
        <p>No posts found</p>
    @endif

@endsection

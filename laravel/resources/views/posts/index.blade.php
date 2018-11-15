@extends('layouts.app')
@section('content')
    
    <h1>Posts</h1>
    @if(count($posts)>1)
        @foreach($posts as $post)
        <div class="card　mb-3">
            <div class="card-body">
                <div class="card-title"><h3><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3></div>
                <small>Written on {{$post->created_at}}</small>
                <p class="card-text"><h5>{!!$post->body!!}</h5></p>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
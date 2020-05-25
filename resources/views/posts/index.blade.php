@extends('layouts.app')
{{-- @section('title')
    Posts
@endsection --}}

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <div class="posts-container">
            @foreach ($posts as $post)
                <div class="post-wrapper">
                    <h2>{{$post->title}}</h2>
                    <img src="{{$post->url_image}}" alt="{{$post->title}}">
                    <div class="btns clearfix">
                        <a class="btn btn-primary float-left" href="{{route('posts.show', $post->slug)}}">View</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

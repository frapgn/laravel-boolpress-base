@extends('layouts.app')

@section('content')
    <article>
        @if (session('post-published'))
            <div class="alert alert-success">
                {{ session('post-published') }}
            </div>
        @endif

        @if (session('post-edited'))
            <div class="alert alert-success">
                {{ session('post-edited') }}
            </div>
        @endif
        <h2>{{$post->title}}</h2>
        <img src="{{$post->url_image}}" alt="{{$post->title}}">
        <div>
            <small>{!!'<strong>' . $post->author . '</strong>'!!}</small>
            <small>{{$post->created_at}}</small>
        </div>
        <p>{{$post->paragraph}}</p>
    </article>
@endsection

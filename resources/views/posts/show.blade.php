{{-- @php
dd($post);
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$post->title}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
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
</body>
</html>

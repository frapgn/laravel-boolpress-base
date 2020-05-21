{{-- @php
dd($post);
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$post->title}}</title>
</head>
<body>
    <article>
        <h2>{{$post->title}}</h2>
        <img src="{{$post->url_image}}" alt="{{$post->title}}">
        <small>{!!'<strong>' . $post->author . '</strong>'!!}</small>
        <small>{{$post->created_at}}</small>
        <p>{{$post->paragraph}}</p>
    </article>
</body>
</html>

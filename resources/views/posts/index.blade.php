<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-boolpress-base</title>
</head>
<body>
    <h1>Laravel Boolpress Base</h1>
    @foreach ($posts as $post)
        <div>
            <h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2>
        </div>
    @endforeach
</body>
</html>

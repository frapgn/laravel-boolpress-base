<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-boolpress-base</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>Laravel Boolpress Base</h1>
    @foreach ($posts as $post)
        <div class="post-wrapper clearfix">
            <h2 class="float-left">{{$post->title}}</h2>
            <a class="btn btn-primary float-left" href="{{route('posts.show', $post->slug)}}">View</a>
            <a class="btn btn-secondary float-left" href="{{route('posts.edit', $post)}}">Edit</a>
            <form class="" action="{{route('posts.destroy', $post->id)}}" method="post">
                @method('DELETE')
                @csrf
                <input class="btn btn-danger float-left" type="submit" name="delete" value="Delete">
            </form>
        </div>
    @endforeach
</body>
</html>

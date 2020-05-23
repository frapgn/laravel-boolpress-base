<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-boolpress-base</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h1>Laravel Boolpress Base</h1>
        <div class="posts-container">
            @foreach ($posts as $post)
                <div class="post-wrapper">
                    <h2>{{$post->title}}</h2>
                    <img src="{{$post->url_image}}" alt="{{$post->title}}">
                    <div class="btns clearfix">
                        <a class="btn btn-primary float-left" href="{{route('posts.show', $post->slug)}}">View</a>
                        <a class="btn btn-secondary float-left" href="{{route('posts.edit', $post)}}">Edit</a>
                        <form class="" action="{{route('posts.destroy', $post->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <input class="btn btn-danger float-left" type="submit" name="delete" value="Delete">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>

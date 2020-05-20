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
        <small>{!!'<strong>' . $post->author . '</strong>'!!}</small>
        <small>{{$post->created_at}}</small>
        <p>{{$post->paragraph}}</p>
    </article>
</body>
</html>

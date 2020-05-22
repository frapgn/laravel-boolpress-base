<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create article</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <form class="create-post" action="{{route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="url_image">Url Image</label>
            <input type="text" class="form-control" name="url_image" value="{{$post->url_image}}">
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
            <label for="paragraph">Paragraph</label>
            <textarea name="paragraph" class="form-control" rows="8" cols="80">{{$post->paragraph}}</textarea>
        </div>

        <div class="form-group">
            <label for="paragraph">Author</label>
            <input type="text" class="form-control" name="author" value="{{$post->author}}">
        </div>

        <label>Do you want to publish the article?</label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="is_published" id="published" value="1" {{($post->is_published == 1) ? 'checked' : ''}}>
            <label class="form-check-label" for="published">Yes</label>
        </div>

        <div class="form-check">
            <input type="radio" class="form-check-input" name="is_published" id="not-published" value="0" {{($post->is_published == 0) ? 'checked' : ''}}>
            <label class="form-check-label" for="not-published">No</labecheckl>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary float-right">
    </form>

</body>
</html>

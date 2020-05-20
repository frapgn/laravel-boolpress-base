<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create article</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <form class="create-post" action="" method="POST">
        <div class="form-group">
            <label for="url_image">Url Image</label>
            <input type="text" class="form-control" name="url_image">
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="paragraph">Paragraph</label>
            <textarea name="paragraph" class="form-control" rows="8" cols="80"></textarea>
        </div>

        <div class="form-group">
            <label for="paragraph">Author</label>
            <input type="text" class="form-control" name="author">
        </div>

        <label>Do you want to publish the article?</label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="is_published" id="published" value="1">
            <label class="form-check-label" for="published">Yes</label>
        </div>

        <div class="form-check">
            <input type="radio" class="form-check-input" name="is_published" id="not-published" value="0">
            <label class="form-check-label" for="not-published">No</labecheckl>
        </div>
    </form>
    <button type="submit" class="btn btn-primary float-right">Submit</button>
</body>
</html>

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
    <form class="create-post" action="{{route('posts.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="url_image">Url Image</label>
            @php $rand_img = 'https://picsum.photos/300/200?random='; $rand_num = rand(1, 1000); @endphp
            <input type="text" class="form-control" name="url_image" value="@php echo $rand_img . $rand_num; @endphp">
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="Title @php echo $rand_num @endphp">
        </div>

        <div class="form-group">
            <label for="paragraph">Paragraph</label>
            <textarea name="paragraph" class="form-control" rows="8" cols="80">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
        </div>

        <div class="form-group">
            <label for="paragraph">Author</label>
            <input type="text" class="form-control" name="author" value="Frank">
        </div>

        <label>Do you want to publish the article?</label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="is_published" id="published" value="1">
            <label class="form-check-label" for="published">Yes</label>
        </div>

        <div class="form-check">
            <input type="radio" class="form-check-input" name="is_published" id="not-published" value="0" checked>
            <label class="form-check-label" for="not-published">No</labecheckl>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary float-right">
    </form>

</body>
</html>

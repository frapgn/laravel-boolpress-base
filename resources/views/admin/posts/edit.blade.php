@extends('layouts.app')

@section('content')
    <form class="create-post" action="{{route('admin.posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="url_image">Url Image</label>
            <input type="text" class="form-control" name="url_image" value="{{(!empty(old('url_image'))) ? old('url_image') : $post->url_image}}">
            @error ('url_image')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{(!empty(old('title'))) ? old('title') : $post->title}}">
            @error ('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="paragraph">Paragraph</label>
            <textarea name="paragraph" class="form-control" rows="8" cols="80">{{(!empty(old('paragraph'))) ? old('paragraph') : $post->paragraph}}</textarea>
            @error ('paragraph')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="paragraph">Author</label>
            <input type="text" class="form-control" name="author" value="{{(!empty(old('author'))) ? old('author') : $post->author}}">
            @error ('author')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
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
        @error ('is_published')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="submit" value="Submit" class="btn btn-primary float-right">
    </form>
@endsection

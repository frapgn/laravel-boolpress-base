<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'url_image',
        'title',
        'slug',
        'paragraph',
        'author',
        'is_published'
    ];
}

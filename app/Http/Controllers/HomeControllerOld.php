<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeControllerOld extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }
}

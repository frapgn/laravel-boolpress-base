<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title'] , '-') . '-' . rand(1,100);
        // dd($data);

        $post = new Post;
        $post->fill($data);
        $saved = $post->save();
        if(!$saved) {
            dd('errore di salvataggio');
        }

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show($slug)
    {
        // $post = Post::find($id);
        $post = Post::where('slug', $slug)->first();


        return view('posts.show', compact('post'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if (empty($post)) {
            abort('404');
        }

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (empty($post)) {
            abort('404');
        }

        $data = $request->all();
        $now = Carbon::now()->format('Y-m-d-H-i-s');

        $data['slug'] = Str::slug($data['title'], '-') . '-' . $now;

        if (empty($data['author'])) {
            unset($data['author']);
        }

        $post->fill($data);
        // dd($post);
        $updated = $post->update();

        if (!$updated) {
            // gestire l'errore
        }

        return redirect()->route('posts.show', $post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (empty($post)) {
            abort('404');
        }

        $post->delete();

        return redirect()->route('posts.index');
    }
}

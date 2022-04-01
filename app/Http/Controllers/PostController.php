<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('users.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
       /*  dd($request); */
        $posts = Post::create([
            'title' => $request->title,
            'extractone' => $request->extractone,
            'extracttwo' => $request->extracttwo,
            'extractthree' => $request->extractthree,
            'content' => $request->content,
            'icon' => $request->icon,

        ]);
        return redirect()->route('posts.index', compact('posts'))->with('info', 'El Post se a creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('users.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProceedingRequest  $request
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        /* dd($proceedings); */
        return redirect()->route('posts.index')->with('info', 'El Post se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('info', 'El Post se eliminó con éxito');
    }
}
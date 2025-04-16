<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return view('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
        $posts = Post::all();
        return view('posts.show', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return view('home');
    }
}

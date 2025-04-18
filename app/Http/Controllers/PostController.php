<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::latest();

        if (request('search'))   {
            $posts->where('nama','like','%' . request('search') . '%');
        }

        return view('posts.show', ['nama' => 'posts', 'posts' => $posts->get()]);
    
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
            'nama' => $request->nama,
            'warna' => $request->warna,
            'jumlah' => $request->jumlah,
            'mesin' => $request->mesin,
            'batch' => $request->batch,
            'penginput' => $request->batch,
            'cadangan' => $request->batch,
        ]);

        return view('posts.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
        
        return view('posts.show', ['post' => $post]);
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

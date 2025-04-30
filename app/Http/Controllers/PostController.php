<?php

namespace App\Http\Controllers;

use App\Models\Labela;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        
        if (request('search')) {
            $posts = Post::where('nama', request('search'));
        }

        return view('posts.show', ['post' => $posts->first()]);

        if (request('slabela')) {
            $labelas = Labela::where('namasa', request('slabela'));
        }

        return view('posts.show', ['labela' => $labelas->first()]);
   
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

        Labela::createa([
            'namasa' => $request->namasa,
            'warna' => $request->warna,
            'jumlah' => $request->jumlah,
            'mesin' => $request->mesin,
            'batch' => $request->batch,
            'baris3' => $request->baris3,
            
        ]);

        return view('posts.createa');
    
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

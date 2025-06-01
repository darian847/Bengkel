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
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function indexa()
    {
        $labelas = Labela::latest()->get();

        return view('posts.indexa', ['labelas' => $labelas]);
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
            'nospk' => $request->nospk,
            'tanggal1' => $request->tanggal1,
            'pemohon' => $request->pemohon,
            'dept' => $request->dept,
            'nomesin' => $request->nomesin,
            'uraianbag1' => $request->uraianbag1,
            'tanggal2' => $request->tanggal2,
            'tanggal3' => $request->tanggal3,
            'pekerja' => $request->pekerja,
            'tanggal4' => $request->tanggal4,
            'mouldgiver' => $request->mouldgiver,
            'tindakperbaikan' => $request->tindakperbaikan,
            'penerimabagus' => $request->penerimabagus,
            'tanggal5' => $request->tanggal5,
            'ok' => $request->ok,
            'gkok' => $request->gkok,
            'catatan' => $request->catatan,
            'sinput1' => $request->sinput1,
            'sinput2' => $request->sinput2,
            'sinput3' => $request->sinput3,
        ]);

        return redirect('/posts/index');
    }

    public function storea(Request $request)
    {


        Labela::create([
            'nospk' => $request->nospk,
            'kepada' => $request->kepada,
            'jenisrepair' => $request->jenisrepair,
            'keterangan' => $request->keterangan,
            'estimasi' => $request->estimasi,
            'sinput1' => $request->sinput1,
        ]);

        return redirect('/posts/indexa');
    }


    public function updatea(Request $request, Post $post)
    {

        $request->validate([
            'nospk' => ['required'],


        ]);

        // Update the attributes
        $post->update([
            'nospk' => $request->nospk,
            'tanggal1' => $request->tanggal1,
            'pemohon' => $request->pemohon,
            'dept' => $request->dept,
            'nomesin' => $request->nomesin,
            'uraianbag1' => $request->uraianbag1,
            'tanggal2' => $request->tanggal2,
            'tanggal3' => $request->tanggal3,
            'pekerja' => $request->pekerja,
            'tanggal4' => $request->tanggal4,
            'mouldgiver' => $request->mouldgiver,
            'tindakperbaikan' => $request->tindakperbaikan,
            'penerimabagus' => $request->penerimabagus,
            'tanggal5' => $request->tanggal5,
            'ok' => $request->ok,
            'gkok' => $request->gkok,
            'catatan' => $request->catatan,
            'sinput1' => $request->sinput1,
            'sinput2' => $request->sinput2,
            'sinput3' => $request->sinput3,
        ]);

        // return redirect()->back()->with('pesan', 'Form Teredit');
        return redirect('/posts/index');
    }

    public function updateas(Request $request, Labela $labela)
    {


        $request->validate([
            'nospk' => ['required'],


        ]);

        // Update the attributes
        $labela->update([
            'nospk' => $request->nospk,
            'kepada' => $request->kepada,
            'jenisrepair' => $request->jenisrepair,
            'keterangan' => $request->keterangan,
            'estimasi' => $request->estimasi,
            'sinput1' => $request->sinput1,
        ]);




        // return redirect()->back()->with('pesan', 'Form Teredit');
        return redirect('/posts/indexa');
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {


        return view('posts.createa', ['post' => $post]);
    }

    public function showa(Labela $labela)
    {


        return view('/buata', ['labela' => $labela]);
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

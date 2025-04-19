<?php

namespace App\Http\Controllers;

use App\Models\Input;
use Illuminate\Http\Request;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        Input::create([
            'nomesin' => $request->nomesin,
            'tanggal' => $request->tanggal,
            'shift' => $request->shift,
            'namainput' => $request->namainput,
            
        ]);

        return view('posts.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Input $input)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Input $input)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Input $input)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Input $input)
    {
        //
    }
}

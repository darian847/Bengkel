<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Models\Post;
use Illuminate\Http\Request;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

       

       return view('inputs.buat');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inputs.buat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Input::create([
            'nama' => $request->nama,
            'warna' => $request->warna,
            'jumlah' => $request->jumlah,
            'mesin' => $request->mesin,
            'batch' => $request->batch,
            'tanggal' => $request->tanggal,
            'shift' => $request->shift,
            'namainput' => $request->namainput,

        ]);

        if (request('nama')) {
            $inputs = Input::where('nama', request('nama'));
        }



         return view('inputs.buat', ['input' => $inputs->latest()->first()]);
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

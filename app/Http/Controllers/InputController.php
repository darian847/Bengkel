<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $inputs = Input::latest();

        return view('inputs.tunjuk', ['input' => $inputs]);
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

        return redirect('inputs.buat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Input $input)
    {
        return view('inputs.buat');
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

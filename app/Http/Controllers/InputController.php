<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Labela;
use App\Models\Plabela;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $inputs = Input::latest();

        return view('inputs.buat', ['input' => $inputs]);
    }

    public function indexa()
    {

        $plabelas = Plabela::latest();

        return view('inputs.buata', ['plabela' => $plabelas]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inputs.buat');
    }

    public function createa()
    {

        return view('inputs.buata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Input::create([
            'nospk' => $request->nospk,
            'kepada' => $request->kepada,
            'jenisrepair' => $request->jenisrepair,
            'keterangan' => $request->keterangan,
            'estimasi' => $request->estimasi,
            'sinput1' => $request->sinput1,


        ]);


        return view('inputs.buat');
    }

    public function storea(Request $request)
    {

        Plabela::create([
            'namasa' => $request->namasa,
            'warna' => $request->warna,
            'jumlah' => $request->jumlah,
            'mesin' => $request->mesin,
            'batch' => $request->batch,
            'baris3' => $request->baris3,
            'tanggal' => $request->tanggal,
            'shift' => $request->shift,
            'namainput' => $request->namainput,

        ]);

        if (request('namasa')) {
            $plabelas = Plabela::where('namasa', request('namasa'));
        }

        return view('inputs.buata', ['plabela' => $plabelas->latest()->first()]);
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

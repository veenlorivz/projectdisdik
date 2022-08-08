<?php

namespace App\Http\Controllers;

use App\Models\WilayahDKI;
use Illuminate\Http\Request;

class WilayahDKIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wilayah = WilayahDKI::latest()->get();
        return view('admin.datawilayah.index', compact('wilayah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.datawilayah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'namawilayah' => 'required',
            'description' => 'required'
        ]);
        //input
        $input = $request->all();
        //save
        $savedata = WilayahDKI::create($input);
        //redirect
        if ($savedata) {
            return redirect()->route('wilayah.index')->with('success', 'Data Wilayah DKI' . ' ' . $request->namawilayah . ' ' . 'Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data Wilayah DKI Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WilayahDKI  $wilayahDKI
     * @return \Illuminate\Http\Response
     */
    public function show(WilayahDKI $wilayahDKI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WilayahDKI  $wilayahDKI
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //id
        $wilayah = WilayahDKI::findOrFail($id);
        //return view
        return view('admin.datawilayah.edit', compact('wilayah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WilayahDKI  $wilayahDKI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $this->validate($request, [
            'namawilayah' => 'required',
            'description' => 'required'
        ]);
        //id
        $wilayah = WilayahDKI::findOrFail($id);
        //input
        $input = $request->all();
        //update
        $updatedata = $wilayah->update($input);
        //redirect
        if ($updatedata) {
            return redirect()->route('wilayah.index')->with('success', 'Data Wilayah DKI' . ' ' . $request->namawilayah . ' ' . 'Berhasil Diubah');
        } else {
            return redirect()->back()->with('error', 'Data Wilayah DKI Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WilayahDKI  $wilayahDKI
     * @return \Illuminate\Http\Response
     */
    public function destroy(WilayahDKI $wilayahDKI)
    {
        //
    }
}

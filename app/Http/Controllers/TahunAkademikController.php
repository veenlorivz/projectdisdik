<?php

namespace App\Http\Controllers;

use App\Models\TahunAkademik;
use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tahunAkademik = TahunAkademik::all();
        return view('admin.tahunakademik.index', compact('tahunAkademik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tahunakademik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namatahunakademik' => 'required',
            'semester' => 'required',
        ]);

        $input = $request->all();
        $tahunAkademik = TahunAkademik::create($input);
        if ($tahunAkademik) {
            return redirect()->route('tahun-akademik.index')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->back()->with('errors', 'Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAkademik $tahunAkademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tahunAkademik = TahunAkademik::findOrfail($id);
        return view('admin.tahunakademik.edit', compact('tahunAkademik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'namatahunakademik' => 'required',
            'semester' => 'required'
        ]);

        //input
        $input = $request->all();
        TahunAkademik::create($input);
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TahunAkademik  $tahunAkademik
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunAkademik $tahunAkademik)
    {
        //
    }
}

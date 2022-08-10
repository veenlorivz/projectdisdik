<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\WilayahDKI;
use App\Models\Jurusan;
use App\Models\TahunAkademik;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.datasekolah.index', ["schools" => School::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d['wilayah'] = WilayahDKI::all();
        $d['jurusan'] = Jurusan::all();
        $d['tahunakademik'] = TahunAkademik::all();
        return view('admin.datasekolah.create', $d);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'namasekolah' => "required|string",
            'alamat' => "required|string",
            "wilayah_dki_id" => "required|numeric|min:1",
            "tahun_akademik_id" => "required|numeric|min:1",
            "jurusan_id" => 'required|numeric|min:1'
        ]);

        School::create([
            "namasekolah" => $validated["namasekolah"],
            "alamat" => $validated["alamat"],
            "wilayah_dki_id" => $validated["wilayah_dki_id"],
            "tahun_akademik_id" => $validated["tahun_akademik_id"],
            "jurusan_id" => $validated["jurusan_id"],
        ]);
        
        return redirect("admin/sekolah-pk");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}

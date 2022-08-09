<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\School;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa = Siswa::all();
        return view('admin.datasiswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.datasiswa.create', [
            'schools' => School::all(),
            "jurusan" => Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            "nisn" => "required|string",
            "namasiswa" => "required|string",
            "alamat" => "required|string",
            "jenis_kelamin" => "required",
            "ttl" => "required|string",
            "sekolah_id" => "required|numeric",
            "jurusan_id" => "required|numeric",
        ]);

        if($validated->fails()){
            return response($validated->errors(), 401);
        }
        Siswa::create($request->all());
        return view('admin.datasiswa.index', ['siswa' => Siswa::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}

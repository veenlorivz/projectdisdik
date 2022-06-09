@extends('main')

@section('title')
    <title>Data Tahun Akademik</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tahun Akademik</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="/admin/tahunakademik">Tahun Akademik</a></div>
                <div class="breadcrumb-item">Tambah Data</div>
            </div>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Tahun Akademik</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('tahun-akademik.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="tahun_akademik">Tahun Akademik</label>
                            <input type="text" class="form-control" id="tahun_akademik" name="tahun_akademik"
                                placeholder="Tahun Akademik">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select name="semester" id="semester" class="form-control">
                                <option value="">Pilih Semester</option>
                                <option value="1">Ganjil</option>
                                <option value="2">Genap</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>
@endsection

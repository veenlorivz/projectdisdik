@extends('main')

@section('title')
    <title>Edit Data Tahun Akademik</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Tahun Akademik</h1>
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
                    <form action="{{ route('tahun-akademik.update', $tahunAkademik->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="tahunakademik">Tahun Akademik</label>
                            <input type="text" name="namatahunakademik" class="form-control"
                                value="{{ $tahunAkademik->namatahunakademik }}">
                        </div>
                        <div class="form-group">
                            <select name="semester" id="" class="form-control">
                                <option value="0">-Pilih Semester-</option>

                                @if ($tahunAkademik->semester == 1)
                                    <option value="1" selected>Ganjil</option>
                                    <option value="2">Genap </option>
                                @else
                                    <option value="1"> Ganjil</option>
                                    <option value="2" selected>Genaps </option>
                                @endif

                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

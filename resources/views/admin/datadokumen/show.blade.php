@extends('main')

@section('title')
    <title>Data Industri</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Dokumen | MoU dengan Industri /kelas Industri</h1>
            <span class="badge bg-secondary ml-3">Not Verifed</span>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label>Nama Sekolah</label>
                        <input type="text" value="SMKN 2 Jakarta" class="form-control" readonly/>
                    </div>
                    <div class="mb-3">
                        <label>Dokumen MoU dengan Industri /kelas Industri</label>
                        <input class="form-control-file" name="file" type="file"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


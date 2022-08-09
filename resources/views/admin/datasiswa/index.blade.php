@extends('main')

@section('title')
    <title>Data Siswa</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Siswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Siswa</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('/admin/siswa/create') }}" class="btn btn-primary mb-3">Tambah Data Siswa</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Sekolah</th>
                                    <th>Nama Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

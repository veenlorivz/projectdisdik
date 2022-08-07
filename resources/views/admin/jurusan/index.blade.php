@extends('main')

@section('title')
    <title>Jurusan</title>
@endsection

@section('content')
    <section class="section">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="section-header">
            <h1>Data Jurusan</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Jurusan</h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('jurusan.create') }}" class="btn btn-primary mb-3">Tambah Jurusan</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Jurusan</th>
                                    <th>Keterangan</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            @foreach ($jurusans as $jurusan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $jurusan->nama }}</td>
                                    <td>{{ $jurusan->keterangan }}</td>
                                    <td>#</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

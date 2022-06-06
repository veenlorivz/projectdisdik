@extends('main')

@section('title')
    <title>Tahun Akademik</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tahun Akademik</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Tahun Akademik</h4>
                </div>
                <div class="card-body">
                    {{-- <a href="{{ route('tahunakademik.create') }}" class="btn btn-primary mb-3">Tambah Tahun Akademik</a> --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tahun Akademik</th>
                                    <th>Aktif</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
@endsection

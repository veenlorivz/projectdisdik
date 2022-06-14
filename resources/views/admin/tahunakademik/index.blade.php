@extends('main')

@section('title')
    <title>Tahun Akademik</title>
@endsection

@section('content')
    <section class="section">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="section-header">
            <h1>Tahun Akademik</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Tahun Akademik</h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('tahun-akademik.create') }}" class="btn btn-primary mb-3">Tambah Tahun Akademik</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tahun Akademik</th>
                                    <th>Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tahunAkademik as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->namatahunakademik }}</td>
                                        <td>{{ $item->semester }}</td>
                                        <td>
                                            <a href="{{ route('tahun-akademik.edit', $item->id) }}"
                                                class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
@endsection

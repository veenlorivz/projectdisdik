@extends('main')

@section('title')
    <title>Data Wilayah</title>
@endsection

@section('content')
    <section class="section">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="section-header">
            <h1>Data Wilayah</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Wilayah</h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('wilayah.create') }}" class="btn btn-primary mb-3">Tambah Data Wilayah</a>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Wilayah</th>
                                    <th>Keterangan</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wilayah as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->namawilayah }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td><a href="{{ route('wilayah.edit', $item->id) }}"
                                                class="btn btn-outline-warning"><i class="fas fa-edit"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

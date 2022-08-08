@extends('main')

@section('title')
    <title>Edit Data Wilayah</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Wilayah</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Wilayah</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('wilayah.update', $wilayah->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Wilayah</label>
                            <input type="text" class="form-control" value="{{ $wilayah->namawilayah }}"
                                name="namawilayah">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="description">{{ $wilayah->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

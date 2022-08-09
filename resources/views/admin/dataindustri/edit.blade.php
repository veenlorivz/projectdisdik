@extends('main')

@section('title')
    <title>Data Industri</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Industri</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Industri</h4>
                </div>
                <div class="card-body">
                    <form action="/admin/industri/{{ $industri->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama Industri</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Industri"
                                value="{{ $industri->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                                value="{{ $industri->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telepon</label>
                            <input type="text" name="no_telp" class="form-control" placeholder="No Telepon"
                                value="{{ $industri->no_telp }}">
                        </div>
                        <button class="btn btn-primary mb-3" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

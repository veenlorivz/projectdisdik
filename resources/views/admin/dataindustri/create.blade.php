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
                    <h4>Data Industri</h4>
                </div>
                <div class="card-body">
                    <form action="/admin/industri" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="nama">Nama Industri</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Industri">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telepon</label>
                            <input type="text" name="no_telp" class="form-control" placeholder="No Telepon">
                        </div>
                        <button class="btn btn-primary mb-3" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


{{-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Industri</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" placeholder="Nama">
                                <label for="">No Telepon</label>
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

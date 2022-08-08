@extends('main')

@section('title')
    <title>Data Wilayah</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Data Wilayah</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data Wilayah</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="nama">Nama Wilayah</label>
                            <input type="text" class="form-control" name="namawilayah">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

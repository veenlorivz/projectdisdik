@extends('main')

@section('title')
    <title>Data Sekolah PK</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Sekolah PK</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Sekolah PK</h4>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="namasekolah">Nama Sekolah</label>
                            <input type="text" name="namasekolah" class="form-control" placeholder="Nama Sekolah">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

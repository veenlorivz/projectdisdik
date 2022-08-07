@extends('main')

@section('title')
    <title>Data Jurusan Create</title>
@endsection

@section('content')
    <section class="section">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="section-header">
            <h1>Create Data Jurusan</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="nama">Nama Jurusan</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Nama Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
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

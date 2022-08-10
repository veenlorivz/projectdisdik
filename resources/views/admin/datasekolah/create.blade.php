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
                        <div class="form-group">
                            <label for="">Data Jurusan</label>
                            <select name="jurusan_id" class="form-control">
                                <option value="0">-Pilih Jurusan -</option>
                                @foreach ($jurusan as $j)
                                    <option value="{{ $j->id }}">{{ $j->nama }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Data Wilayah</label>
                            <select name="wilayah_id" class="form-control">
                                <option value="0">- Pilih Wilayah -</option>
                                @foreach ($wilayah as $w)
                                    <option value="{{ $w->id }}">{{ $w->namawilayah }}</option>
                                @endforeach

                            </select>
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

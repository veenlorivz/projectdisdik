@extends('main')

@section('title')
    <title>Data Industri</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data siswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data siswa</h4>
                </div>
                <div class="card-body">
                    <form action="/admin/siswa" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="nisn">NISN :</label>
                            <input type="text" name="nisn" class="form-control" placeholder="NISN">
                        </div>
                        <div class="form-group">
                            <label for="namasiswa">Nama Siswa :</label>
                            <input type="text" name="namasiswa" class="form-control" placeholder="Nama siswa">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat :</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Tempat Tanggal Lahir :</label>
                            <input type="text" name="ttl" class="form-control" placeholder="Contoh : Jakarta, 22 Agustus 2000">
                        </div>
                        <div class="form-group">
                            <label for="Jenis_kelamin">Jenis Kelamin :</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki">
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        <select class="form-control mb-4" aria-label="Default select example" name="sekolah_id">
                            <option selected>Pilih Sekolah</option>
                            {{-- @foreach ($schools as $school) --}}
                                
                            <option value="1">SMKN 1 Jakarta</option>
                            <option value="2">SMKN 2 Jakarta</option>
                            <option value="3">SMKN 3 Jakarta</option>
                            {{-- @endforeach --}}
                        </select>
                        <select class="form-control mb-3" aria-label="Default select example" name="jurusan_id">
                            <option selected>Pilih Jurusan</option>
                            {{-- @foreach ($jurusan as $j) --}}
                                
                            <option value="1">Rekayasa Perangkat Lunak</option>
                            <option value="2">TKJ</option>
                            <option value="3">MM</option>
                            {{-- @endforeach --}}
                        </select>
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

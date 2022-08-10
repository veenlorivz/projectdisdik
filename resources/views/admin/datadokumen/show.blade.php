@extends('main')

@section('title')
    <title>Data Industri</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Dokumen | MoU dengan Industri /kelas Industri</h1>
            <span class="badge bg-secondary ml-3">Not Verifed</span>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label>Nama Sekolah</label>
                            <input type="text" value="SMKN 2 Jakarta" class="form-control" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="d-block">Dokumen MoU dengan Industri /kelas Industri</label>
                            <input class="form-control-file mb-1" name="file" type="file"/>
                            <span style="font-size: 12px;">Allowed Ext : PDF or DOCX</span>
                        </div>
                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3" style="height: 160px;"></textarea>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-6">
                                <a href="../" class="btn text-decoration-none text-secondary">
                                    <i class="fas fa-arrow-left pr-1"></i>
                                    Kembali
                                </a>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    Selesaikan
                                    <i class="fas fa-arrow-right pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


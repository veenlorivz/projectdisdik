@extends('main')

@section('title')
    <title>Data Industri</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Dokumen</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-3">Progress Saat Ini</h6>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div>
                </div>
            </div>
        <div class="card">
                <div class="card-header">
                    <h4>Data Dokumen</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card border" id="mycard-dimiss">
                                <div class="card-header bg-primary">
                                  <h4 class="text-light">MoU dengan Industri /kelas Industri</h4>
                                  <!-- card dismiss toggle -->
                                  <div class="card-header-action">
                                    <a data-dismiss="#mycard-dimiss" class="btn btn-icon"><i class="ion ion-close"></i></a>
                                  </div>
                                </div>
                                <div class="card-body">
                                  <p>Description</p>
                                </div>
                                <div class="card-footer">
                                    <div class="d-inline-block">
                                        <span class="badge border border-primary text-primary rounded-3 mt-1">On Progress</span>
                                    </div>
                                    <div class="float-right">
                                        <a href="#" class="btn btn-primary">Selesaikan</a>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<?php

use App\Http\Controllers\TahunAkademikController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\WilayahDKIController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    //wilayah
    Route::get('wilayah-dki', [WilayahDKIController::class, 'index'])->name('wilayah.index');
    Route::get('wilayah-dki-create', [WilayahDKIController::class, 'create'])->name('wilayah.create');
    Route::post('wilayah-dki-post', [WilayahDKIController::class, 'store'])->name('wilayah.store');
    Route::get('wilayah-dki-edit/{id}', [WilayahDKIController::class, 'edit'])->name('wilayah.edit');
    Route::put('wilayah-dki-update/{id}', [WilayahDKIController::class, 'update'])->name('wilayah.update');


    Route::resource('tahun-akademik', TahunAkademikController::class);
    Route::get('tahun-akademik/destroy/{id}', [TahunAkademikController::class, 'destroy'])->name('tahun-akademik.destroy');

    //jurusan module
    Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('jurusan-create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::post('jurusan-store', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::get('jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::put('jurusan-update/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::get('jurusan-destroy/{id}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');

    //sekolah PK
    Route::get('sekolah-pk', [SchoolController::class, 'index'])->name('sekolah.index');
    Route::get('sekolah-pk-create', [SchoolController::class, 'create'])->name('sekolah.create');

    //industri module
    Route::resource('industri', IndustriController::class);
});

<?php

use App\Http\Controllers\TahunAkademikController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::resource('tahun-akademik', TahunAkademikController::class);
    Route::get('tahun-akademik/destroy/{id}',[TahunAkademikController::class, 'destroy'])->name('tahun-akademik.destroy');

    //jurusan module
    Route::get('jurusan', [JurusanController::class,'index'])->name('jurusan.index');

    //industri module
    Route::resource('industri', IndustriController::class);
});

<?php

use App\Http\Controllers\TahunAkademikController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::resource('tahun-akademik', TahunAkademikController::class);
    Route::get('tahun-akademik/destroy/{id}', [TahunAkademikController::class, 'destroy'])->name('tahun-akademik.destroy');

    //jurusan module
    Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('jurusan-create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::post('jurusan-store', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::get('jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::put('jurusan-update/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::get('jurusan-destroy/{id}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');

    //industri module
    Route::resource('industri', IndustriController::class);
});

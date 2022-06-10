<?php

use App\Http\Controllers\TahunAkademikController;
use App\Http\Controllers\IndustriController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::resource('tahun-akademik', TahunAkademikController::class);

    Route::resource('industri', IndustriController::class);
});

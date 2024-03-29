<?php
//make routes file

use App\Http\Controllers\Spp;
use Illuminate\Support\Facades\Route;
Route::middleware('auth')->prefix('/dashboard/spp')->group(function () {
    Route::get('/', [Spp::class, 'index'])->name('spp.index');
    Route::get('/create', [Spp::class, 'create'])->name('spp.create');
    Route::post('/store', [Spp::class, 'store'])->name('spp.store');
    Route::get('/edit/{id}', [Spp::class, 'edite'])->name('spp.edit');
    Route::post('/update/{id}', [Spp::class, 'update'])->name('spp.update');
    Route::get('/delete/{id}', [Spp::class, 'delete'])->name('spp.delete');
    Route::get('/detail-spp/kelola-daftar', [Spp::class, 'kelola_daftar']);
    Route::get('/detail-spp/{id}', [Spp::class, 'detail_keuangan']);
    Route::get('/input_santri/{id}/insert', [Spp::class, 'input_santri']);
});

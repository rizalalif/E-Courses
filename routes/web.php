<?php

use App\Http\Controllers\DetailMateriController;
use App\Http\Controllers\DetailSoala;
use App\Http\Controllers\DetailSoalController;
use App\Http\Controllers\ManajemenKonfigurasiController;
use App\Http\Controllers\ManajemenMateriController;
use App\Http\Controllers\ManajemenPaketController;
use App\Http\Controllers\ManajemenSoalController;
use App\Http\Controllers\ManajemenTransaksiController;
use App\Http\Controllers\soaldetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('admin/soal/detailsoal', DetailSoalController::class);
Route::resource('admin/materi/detailmateri', DetailMateriController::class);
Route::resource('admin/soal', ManajemenSoalController::class);
Route::resource('admin/paket', ManajemenPaketController::class)
    ->names([
        'index' => 'paket.index',
        'create' => 'paket.create',
        'store' => 'paket.store',
        'show' => 'paket.show',
        'edit' => 'paket.edit',
        'update' => 'paket.update',
        'destroy' => 'paket.destroy',
    ]);
Route::delete('admin/paket/materi/{id}', [ManajemenPaketController::class, 'deleteMaterial'])->name('paket.material.delete');
Route::resource('admin/materi', ManajemenMateriController::class);
Route::resource('admin/transaksi', ManajemenTransaksiController::class);
Route::resource('admin/konfigurasi', ManajemenKonfigurasiController::class);

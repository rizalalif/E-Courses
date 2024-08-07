<?php

use App\Http\Controllers\DetailMateriController;
use App\Http\Controllers\DetailSoalController;
use App\Http\Controllers\ManajemenKonfigurasiController;
use App\Http\Controllers\ManajemenMateriController;
use App\Http\Controllers\ManajemenPaketController;
use App\Http\Controllers\ManajemenSoalController;
use App\Http\Controllers\ManajemenTransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('admin/soal', ManajemenSoalController::class);
Route::resource('admin/paket', ManajemenPaketController::class);
Route::resource('admin/materi', ManajemenMateriController::class);
Route::resource('admin/transaksi', ManajemenTransaksiController::class);
Route::resource('admin/konfigurasi', ManajemenKonfigurasiController::class);
Route::resource('admin/soal/detail', DetailSoalController::class)
    ->names([
        'index' => 'admin.soal.detail.index',
        'create' => 'admin.soal.detail.create',
        'store' => 'soal.detail.store',
        'show' => 'soal.detail.show',
        'edit' => 'soal.detail.edit',
        'update' => 'soal.detail.update',
        'destroy' => 'soal.detail.destroy',
    ]);
Route::resource('admin/materi/detail', DetailMateriController::class)
    ->names([
        'index' => 'materi.detail.index',
        'create' => 'materi.detail.create',
        'store' => 'materi.detail.store',
        'show' => 'materi.detail.show',
        'edit' => 'materi.detail.edit',
        'update' => 'materi.detail.update',
        'destroy' => 'materi.detail.destroy',
    ]);

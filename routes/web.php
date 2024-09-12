<?php

use App\Http\Controllers\DetailMateriController;
use App\Http\Controllers\DetailSoalController;
use App\Http\Controllers\ManajemenKonfigurasiController;
use App\Http\Controllers\ManajemenMateriController;
use App\Http\Controllers\ManajemenPaketController;
use App\Http\Controllers\ManajemenSoalController;
use App\Http\Controllers\ManajemenTransaksiController;
use App\Http\Controllers\PaketUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserTransactionController;
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
Route::post('admin/paket/category', [ManajemenPaketController::class, 'addCategory'])->name('paket.category');
Route::delete('admin/paket/materi/{id}', [ManajemenPaketController::class, 'deleteMaterial'])->name('paket.material.delete');
Route::resource('admin/materi', ManajemenMateriController::class);
Route::resource('admin/transaction', ManajemenTransaksiController::class);
Route::resource('admin/konfigurasi', ManajemenKonfigurasiController::class);
Route::get('user/home', [UserController::class, 'index'])->name('user.home');
Route::get('user/paket/{id}', [UserController::class, 'paketDetail'])->name('user.detailPaket');
Route::GET('user/checkout/{paket}/single', [UserTransactionController::class, 'buySingle'])->name('user.checkout.single');
Route::GET('user/checkout/{id}/cart', [UserTransactionController::class, 'buyFromCart'])->name('user.checkout.cart');
Route::post('user/checkout/payment', [UserTransactionController::class, 'checkout'])->name('user.checkout.payment');
Route::get('user/order/{transaction:code}', [UserTransactionController::class, 'orderDetail'])->name('user.order.detail');
Route::post('user/order/payment', [UserTransactionController::class, 'payment'])->name('user.order.payment');

// Route::post('user/checkout', [UserTransactionController::class, 'buyPaket'])->name('user.checkout.payment');
Route::get('user/learning', [PaketUserController::class, 'index'])->name('user.learning');
Route::get('user/learning/{id}', [PaketUserController::class, 'index'])->name('user.learning.material');

// Route::GET('user/home', function () {
//     return view('user.home');
// })->name('user.home');

Route::GET('user/paket', function () {

    return view('user.paket');
})->name('user.paket');
Route::GET('user/keranjang', function () {
    return view('user.keranjang');
})->name('user.keranjang');

Route::GET('user/order', function () {
    return view('user.order');
})->name('user.order');
// Route::GET('user/order/detail', function () {
//     return view('user.orderdetail');
// })->name('user.order.detail');
Route::GET('user/profile', function () {
    return view('user.profile');
})->name('user.profile');

Route::GET('user/learning/paket', function () {
    return view('user.paketuserdetail');
})->name('user.paketuser.detail');

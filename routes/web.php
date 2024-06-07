<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('main');
});

Route::get('/main', function () {
    Session::flush();
    return view('main');
});

Route::get('/pembayaran/kartu', function () {
    return view('pages.Metode.debit');
});

Route::get('/pembayaran', function () {
    return view('pages.Ticketing.pembayaran');
})->name('pembayaran');

Route::get('/tiket', [TiketController::class, 'index', 'store'])->name('pesan-tiket');
Route::get('/pembayaran/qris', [PaymentController::class, 'generateQRCode'])->name('qris');
Route::get('/pages/Ticketing/pembayaran', [PaymentController::class, 'showPayment'])->name('payment');
Route::post('/submit-nominal', [PaymentController::class, 'submit'])->name('submit.nominal');
Route::get('/create-session', [PaymentController::class, 'createSession'])->name('create.session');


Route::get('/struk', function() {
    return view('pages.Status.struk');
});

// Login admin

Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/home', [AdminController::class, 'index'])->name('home')->middleware('auth');


// Coba Admin
Route::get('/manage-tiket', [TiketController::class, 'manageTiket'])->name('manage-tiket');

Route::get('/laporan-pengunjung', function () {
    return view('pages.admin.laporan');
})->name('laporan-pengunjung');

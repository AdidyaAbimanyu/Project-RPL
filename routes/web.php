<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('main');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/pembayaran/kartu', function () {
    return view('pages.Metode.debit');
});

Route::get('/pembayaran', function () {
    return view('pages.Ticketing.pembayaran');
})->name('pembayaran');

Route::get('/tiket', [TiketController::class, 'index', 'store'])->name('pesan-tiket');
Route::get('/pembayaran/qris', [PaymentController::class, 'generateQRCode'])->name('generate.qrcode');
Route::get('/pages/Ticketing/pembayaran', [PaymentController::class, 'showPayment'])->name('payment');
Route::post('/submit-nominal', [PaymentController::class, 'submit'])->name('submit.nominal');

Route::get('/struk', function() {
    return view('pages.Status.struk');
});

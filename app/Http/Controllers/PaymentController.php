<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PaymentController extends Controller
{
    public function generateQRCode(Request $request)
    {
        $url = 'http://192.168.100.34:8000/pages/Ticketing/pembayaran'; // Ganti dengan URL yang sesuai

        // Buat QR Code
        $qrCode = QrCode::size(300)->generate($url);

        // Tampilkan QR Code di view
        return view('pages.Metode.qris', compact('qrCode'));
    }
    public function showPayment()
    {
        // Tampilkan halaman pembayaran di sini
        return view('pages.Ticketing.pembayarantest');
    }
    public function showSuccessPage()
    {
        return view('pages.Status.status_sukses');
    }

}

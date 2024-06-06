<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Laporan;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function createSession(Request $request)
    {
        Session::put('value', 150300);
        Session::put('tiket_dewasa', 2);
        Session::put('tiket_anak', 1);
    }

    public function generateQRCode(Request $request)
    {
        $url = 'https://github.com/AdidyaAbimanyu/Project-RPL'; // Ganti dengan URL yang sesuai

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

    public function showFailedPage()
    {
        return view('pages.Status.status_gagal');
    }

    public function submit(Request $request)
    {
        $nominal = $request->input('nominal');
        $value = Session::get('value');
        $tiket_dewasa = Session::get('tiket_dewasa');
        $tiket_anak = Session::get('tiket_anak');

        if ($nominal >= $value) {

            // Ambil data dalam database
            $tiketDewasa = Tiket::where('nama_tiket', 'Dewasa')->first();
            $tiketAnak = Tiket::where('nama_tiket', 'Anak - anak')->first();
            $laporan = Laporan::whereDate('tanggal', Carbon::today())->first();

            $tiketDewasa->ketersediaan -= $tiket_dewasa;
            $tiketDewasa->save();

            $tiketAnak->ketersediaan -= $tiket_anak;
            $tiketAnak->save();

            if ($laporan) {
                // Tambah 1 ke atribut jumlah_dewasa dan jumlah_anak
                $laporan->jumlah_pengunjung_dewasa += $tiket_dewasa;
                $laporan->jumlah_pengunjung_anak += $tiket_anak;
                $laporan->save();
            } else {
                // Jika tidak ada laporan dengan tanggal yang sama, buat baris baru
                $laporan = new Laporan();
                $laporan->tanggal = Carbon::today();
                $laporan->jumlah_pengunjung_dewasa = $tiket_dewasa;
                $laporan->jumlah_pengunjung_anak = $tiket_anak;
                $laporan->save();
            }

            return view('pages.Status.status_sukses');
        } else {
            return view('pages.Status.status_gagal');
        }
    }

}

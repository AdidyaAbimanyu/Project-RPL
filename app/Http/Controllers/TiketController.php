<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil harga tiket untuk Anak-anak dan Dewasa dari database
        $anak = Tiket::where('nama_tiket', 'Anak - anak')->first();
        $dewasa = Tiket::where('nama_tiket', 'Dewasa')->first();

        // Kirim data ke view
        return view('pages.Ticketing.tiket', compact('anak', 'dewasa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jumlahAnak = $request->input('jumlahAnak');
        $jumlahDewasa = $request->input('jumlahDewasa');

        $hargaAnak = Tiket::where("nama_tiket", "Anak - anak")->value('harga');
		$hargaDewasa = Tiket::where("nama_tiket", "Dewasa")->value('harga');

        $total = ($jumlahAnak * $hargaAnak) + ($jumlahDewasa * $hargaDewasa);

        session([
            'jumlahAnak' => $jumlahAnak,
            'jumlahDewasa' => $jumlahDewasa,
            'total' => $total
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $total = session('total');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tiket $tiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiket $tiket)
    {
        //
    }
}

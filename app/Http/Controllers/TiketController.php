<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiket = DB::table('tikets')->get();

        // Ambil harga tiket untuk Anak-anak dan Dewasa dari database
        $anak = Tiket::where('nama_tiket', 'Anak - anak')->first();
        $dewasa = Tiket::where('nama_tiket', 'Dewasa')->first();

        // Kirim data ke view
        return view('pages.Ticketing.tiket', compact('anak', 'dewasa'));
    }

    /**
     * Display the admin management view with all tickets.
     */
    public function manageTiket()
    {
        // Retrieve all tickets from the database
        $tiket = DB::table('tikets')->get();

        // Pass the tickets data to the admin management view
        return view('pages.admin.managetiket', ['tiket' => $tiket]);
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
    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('pages.admin.formmanagetiket', compact('tiket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tiket' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'ketersediaan' => 'required|numeric',
        ]);
    
        $tiket = Tiket::findOrFail($id);
        $tiket->nama_tiket = $request->nama_tiket;
        $tiket->harga = $request->harga;
        $tiket->ketersediaan = $request->ketersediaan;
        $tiket->save();
    
        return redirect()->route('manage-tiket')->with('success', 'Tiket berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();
        return redirect()->back()->with('success', 'Tiket berhasil dihapus');
    }
}

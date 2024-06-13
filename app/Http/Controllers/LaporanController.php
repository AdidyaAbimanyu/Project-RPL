<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.laporan');
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
        $request->validate([
            'dateFrom' => 'required|date',
            'dateTo' => 'required|date|after_or_equal:dateFrom',
        ]);

        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');

        $data = Laporan::whereBetween('tanggal', [$dateFrom, $dateTo])
        ->selectRaw('SUM(jumlah_pengunjung_dewasa) as total_dewasa, SUM(jumlah_pengunjung_anak) as total_anak')
        ->first();

        return view('pages.admin.laporan', compact('data', 'dateFrom', 'dateTo'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}

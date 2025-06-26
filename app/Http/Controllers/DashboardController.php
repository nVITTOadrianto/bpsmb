<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // This method can be used to display a list of resources or dashboard data.
        $bukuLhpCount = SuratMasuk::all()->where('nama_komoditi_sampel', 'LHP')->count();
        $kopiRutinCount = SuratMasuk::all()->where('nama_komoditi_sampel', 'Kopi Rutin')->count();
        $ladaRutinCount = SuratMasuk::all()->where('nama_komoditi_sampel', 'Lada Rutin')->count();

        $limaSuratTerbaru = SuratMasuk::orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard.index', compact('bukuLhpCount', 'kopiRutinCount', 'ladaRutinCount', 'limaSuratTerbaru'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

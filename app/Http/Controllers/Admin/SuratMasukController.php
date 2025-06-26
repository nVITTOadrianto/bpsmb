<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $suratSurat = SuratMasuk::paginate(10);
        return view('dashboard.admin.surat', ['suratSurat' => $suratSurat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.admin.create-surat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'alamat_perusahaan' => 'required|string|max:255',
            'nama_komoditi_sampel' => 'required|string|max:255',
            'nomor_surat' => 'required|string|max:50',
            'tanggal_masuk_surat' => 'required|date',
            'tanggal_masuk' => 'required|date',
            'waktu_masuk' => 'required|date_format:H:i',
            'perihal' => 'required|string|max:255',
        ]);

        $suratMasuk = new SuratMasuk();
        $suratMasuk->nama_perusahaan = $validatedData['nama_perusahaan'];
        $suratMasuk->alamat_perusahaan = $validatedData['alamat_perusahaan'];
        $suratMasuk->nama_komoditi_sampel = $validatedData['nama_komoditi_sampel'];
        $suratMasuk->tanggal_masuk_surat = $validatedData['tanggal_masuk_surat'];
        $suratMasuk->nomor_surat = $validatedData['nomor_surat'];
        $suratMasuk->tanggal_masuk = $validatedData['tanggal_masuk'];
        $suratMasuk->waktu_masuk = $validatedData['waktu_masuk'];
        $suratMasuk->perihal = $validatedData['perihal'];
        $suratMasuk->kode_output = 0;
        $suratMasuk->created_by_user_id = auth()->id();

        $suratMasuk->save();
        return redirect()->route('admin.surat.index')->with('success', 'Surat masuk berhasil ditambahkan.');
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

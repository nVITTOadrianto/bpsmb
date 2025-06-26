@extends('dashboard.layouts.app')

@section('content')
<main class="container py-4">
    <h1 class="mb-4 fw-bold">Input Surat Baru</h1>
    <form action="{{ route('admin.surat.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required>
        </div>
        <div class="mb-3">
            <label for="alamat_perusahaan" class="form-label">Alamat Perusahaan</label>
            <textarea class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" required></textarea>
        </div>
        <div class="mb-3">
            <label for="nama_komoditi_sampel" class="form-label">Nama Komoditi Sampel</label>
            <select class="form-select" id="nama_komoditi_sampel" name="nama_komoditi_sampel" required>
                <option value="" disabled selected>Pilih Komoditi</option>
                <option value="LHP">LHP</option>
                <option value="Kopi Rutin">Kopi Rutin</option>
                <option value="Lada Rutin">Lada Rutin</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nomor_surat" class="form-label">Nomor Surat</label>
            <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_masuk_surat" class="form-label">Tanggal Surat</label>
            <input type="date" class="form-control" id="tanggal_masuk_surat" name="tanggal_masuk_surat" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_masuk" class="form-label">Tanggal Masuk Sampel</label>
            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" required>
        </div>
        <div class="mb-3">
            <label for="waktu_masuk" class="form-label">Waktu Masuk Sampel</label>
            <input type="time" class="form-control" id="waktu_masuk" name="waktu_masuk" required>
        </div>
        <div class="mb-3">
            <label for="perihal" class="form-label">Jenis Uji (Hal)</label>
            <input type="text" class="form-control" id="perihal" name="perihal" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('admin.surat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</main>
@endsection

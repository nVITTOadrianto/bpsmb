@extends('dashboard.layouts.app')

@section('content')
    <main class="container py-4">
        <h1 class="mb-4 fw-bold">Dashboard</h1>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-between" style="min-height: 9rem;">
                        <div class="fs-5">
                            <i class="bi bi-book"></i>
                            Buku LHP
                        </div>
                        <div class="fw-bold fs-1">
                            {{ $bukuLhpCount }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-between" style="min-height: 9rem;">
                        <div class="fs-5">
                            <i class="bi bi-cup-hot"></i>
                            Kopi Rutin
                        </div>
                        <div class="fw-bold fs-1">
                            {{ $kopiRutinCount }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-between" style="min-height: 9rem;">
                        <div class="fs-5">
                            <i class="bi bi-three-dots"></i>
                            Lada Rutin
                        </div>
                        <div class="fw-bold fs-1">
                            {{ $ladaRutinCount }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h4 class="fw-bold mb-0">5 Data Surat Disposisi Terbaru</h4>
            <a href="{{ route('admin.surat.index') }}" class="link mb-0">Lihat Semua Surat ></a>
        </div>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Nama Komoditi Sampel</th>
                    <th>Nomor Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal dan Waktu Sampel</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($limaSuratTerbaru as $surat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $surat->nama_perusahaan }}</td>
                        <td>{{ $surat->nama_komoditi_sampel }}</td>
                        <td>{{ $surat->nomor_surat }}</td>
                        <td>{{ $surat->tanggal_masuk_surat }}</td>
                        <td>{{ $surat->tanggal_masuk }} {{ $surat->waktu_masuk }}</td>
                        <td>{{ $surat->status_dokumen }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection

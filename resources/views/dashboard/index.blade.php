@extends('dashboard.layouts.app')

@section('content')
    <main class="container py-4">
        <h1 class="mb-4 fw-bold">Dashboard</h1>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body bg-danger text-white d-flex flex-column justify-content-between" style="min-height: 9rem;">
                        <div class="fs-5">
                            <i class="bi bi-envelope-arrow-down"></i>
                            Surat Masuk
                        </div>
                        <div class="fw-bold fs-1">1</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body bg-warning text-black d-flex flex-column justify-content-between" style="min-height: 9rem;">
                        <div class="fs-5">
                            <i class="bi bi-envelope-arrow-down"></i>
                            Surat yang Ditandatangani
                        </div>
                        <div class="fw-bold fs-1">1</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body bg-success text-white d-flex flex-column justify-content-between" style="min-height: 9rem;">
                        <div class="fs-5">
                            <i class="bi bi-envelope-arrow-down"></i>
                            Surat yang Divalidasi
                        </div>
                        <div class="fw-bold fs-1">1</div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mb-4 fw-bold">Data Surat Masuk Terbaru</h4>
        <table class="table table-striped table-bordered" style="max-width: max-content;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Pengirim</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>123/SM/2023</td>
                    <td>01-01-2023</td>
                    <td>PT. Contoh</td>
                    <td>Belum Ditandatangani</td>
                </tr>
            </tbody>
        </table>
        <h4 class="mb-4 fw-bold">Data Surat yang Sudah Ditandatangani Terbaru</h4>
        <h4 class="mb-4 fw-bold">Data Surat yang Sudah Divalidasi Terbaru</h4>
    </main>
@endsection

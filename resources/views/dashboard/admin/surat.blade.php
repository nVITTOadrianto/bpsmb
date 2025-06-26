@extends('dashboard.layouts.app')

@section('content')
    <main class="container py-4">
        <h1 class="mb-4 fw-bold">Surat</h1>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @error('suratError')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <a href="{{ route('admin.surat.create') }}" class="btn btn-success">Input Surat Baru</a>
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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suratSurat as $surat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $surat->nama_perusahaan }}</td>
                        <td>{{ $surat->nama_komoditi_sampel }}</td>
                        <td>{{ $surat->nomor_surat }}</td>
                        <td>{{ $surat->tanggal_masuk_surat }}</td>
                        <td>{{ $surat->tanggal_masuk }} {{ $surat->waktu_masuk }}</td>
                        <td>{{ $surat->status_dokumen }}</td>
                        <td>
                            <a href="{{ route('admin.surat.show', $surat->id) }}" class="btn btn-primary btn-sm">Detail</a>
                            <a href="{{ route('admin.surat.print', $surat->id) }}" class="btn btn-warning btn-sm">Preview</a>
                            <a href="{{ route('admin.surat.sendToApproval', $surat->id) }}" class="btn btn-success btn-sm">Kirim</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection

@extends('layouts.app')

@section('content')
<img src="{{asset('img/lampung.png')}}" alt="Logo Provinsi Lampung" class="img-fluid mx-auto d-block mt-5" style="width: 150px; height: auto;">
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="display-4">Sistem Tata Usaha BPSMB</h1>
        <p class="lead">Dinas Perindustrian dan Perdagangan Provinsi Lampung</p>
        <p class="text-center">Sistem Tata Usaha BPSMB adalah platform yang dirancang untuk mempermudah pengelolaan data dan informasi di BPSMB. Dengan sistem ini, Anda dapat mengakses berbagai fitur seperti pengelolaan dokumen, laporan, dan informasi terkait BPSMB dengan mudah dan efisien.</p>
        <p class="text-center">Untuk memulai, silakan masuk ke akun Anda dengan mengklik tombol di bawah ini.</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
            Mulai Menulis Surat
        </a>
    </div>
</div>
@endsection

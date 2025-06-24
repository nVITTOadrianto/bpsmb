@extends('layouts.auth')

@section('content')
<style>
    body {
        background-color: #ddedff;
    }
</style>
<div class="card" style="width: 30rem; margin: 150px auto; padding: 20px;">
    <div class="card-body">
        <a href="{{ route('home') }}">< Kembali</a>
        <img src="{{ asset('img/lampung.png') }}" alt="Logo Provinsi Lampung" class="img-fluid mx-auto d-block mb-4" style="width: 100px; height: auto;">
        <h1 class="card-title text-center">Login</h1>

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username"
                    name="username" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password"
                    name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="mt-3 text-center">
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
        </div>
    </div>
</div>
@endsection

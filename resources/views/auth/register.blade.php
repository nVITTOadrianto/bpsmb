@extends('layouts.auth')

@section('content')
<style>
    body {
        background-color: #ddedff;
    }
</style>
<div class="card" style="width: 30rem; margin: 75px auto; padding: 20px;">
    <div class="card-body">
        <a href="{{ route('home') }}">< Kembali</a>
        <img src="{{ asset('img/lampung.png') }}" alt="Logo Provinsi Lampung" class="img-fluid mx-auto d-block mb-4" style="width: 100px; height: auto;">
        <h1 class="card-title text-center">Daftar</h1>

        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username"
                    name="username" required autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email"
                    name="email" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password"
                    name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirmation"
                    name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <div class="mt-3 text-center">
            <p>Sudah punya akun? <a href="{{ route('login') }}">Daftar</a></p>
        </div>
    </div>
</div>
@endsection

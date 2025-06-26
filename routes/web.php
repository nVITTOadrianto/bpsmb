<?php

use App\Http\Controllers\Admin\SuratMasukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

# LANDING PAGES
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

# LOGIN
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
});

# DASHBOARD
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware(['role:Administrasi'])->group(function () {
        Route::prefix('/admin/surat')->name('admin.surat.')->group(function () {
            Route::get('/', [SuratMasukController::class, 'index'])->name('index');
            Route::get('/create', [SuratMasukController::class, 'create'])->name('create');
            Route::post('/create', [SuratMasukController::class, 'store'])->name('store');
            Route::get('/{suratMasuk}', [SuratMasukController::class, 'show'])->name('show');
            Route::post('/{suratMasuk}/send-to-approval', [SuratMasukController::class, 'sendToApproval'])->name('sendToApproval');
            Route::get('/{suratMasuk}/print', [SuratMasukController::class, 'printDocument'])->name('print');
            // Tambahkan rute untuk edit/delete jika diperlukan
        });
    });
});

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// 🏠 Halaman Home (ambil data dari controller)
Route::get('/', [HomeController::class, 'index'])->name('home');

// 📄 Halaman Detail Berita
Route::get('/berita/{id}', [HomeController::class, 'show'])->name('berita.show');

// 🔍 Fitur Pencarian Berita
Route::get('/search', [HomeController::class, 'search'])->name('search');

// 🛡️ Halaman Dashboard (hanya untuk user yang sudah login & terverifikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/politics', function () {
    return view('politics');
});

// ⚙️ Halaman Pengaturan Profil (login required)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 🔐 Route untuk autentikasi login/register dari Breeze
require __DIR__.'/auth.php';
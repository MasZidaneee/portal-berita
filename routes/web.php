<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;

// 🔐 Auth Routes dari Breeze
require __DIR__.'/auth.php';

// 🧾 Halaman Publik (detail berita & pencarian)
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/search', [BeritaController::class, 'search'])->name('search');

// 🧑‍💼 Admin CRUD Berita
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('beritas', AdminBeritaController::class);
});

// 👥 Route yang hanya bisa diakses setelah login
Route::middleware(['auth'])->group(function () {
    // 🏠 Beranda wajib login
    Route::get('/', [BeritaController::class, 'index'])->name('home');

    // 📚 Halaman kategori
    Route::get('/healths', fn () => view('healths'));
    Route::get('/worlds', fn () => view('worlds'));
    Route::get('/education', fn () => view('education'));
    Route::get('/sports', fn () => view('sports'));

    // ⚙️ Profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 🛡️ Dashboard (verifikasi email diperlukan)
    Route::get('/dashboard', fn () => view('dashboard'))->middleware('verified')->name('dashboard');
});
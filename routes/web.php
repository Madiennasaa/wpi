<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Group (Hanya bisa diakses kalau sudah login)
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // CRUD Berita & Kegiatan
    Route::get('/artikel', [AdminController::class, 'index'])->name('artikel.index');
    Route::get('/artikel/create', [AdminController::class, 'create'])->name('artikel.create');
    Route::post('/artikel/store', [AdminController::class, 'store'])->name('artikel.store');
    Route::get('/artikel/{id}/edit', [AdminController::class, 'edit'])->name('artikel.edit');
    Route::put('/artikel/{id}', [AdminController::class, 'update'])->name('artikel.update');
    Route::delete('/artikel/{id}', [AdminController::class, 'destroy'])->name('artikel.destroy');
});

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route TERPISAH untuk Berita dan Kegiatan
Route::get('/berita', [HomeController::class, 'berita'])->name('berita.index');
Route::get('/kegiatan', [HomeController::class, 'kegiatan'])->name('kegiatan.index');

// Route untuk Detail Artikel (untuk berita maupun kegiatan)
Route::get('/artikel/{slug}', [HomeController::class, 'show'])->name('artikel.show');

// Static Pages
Route::view('/struktur', 'pages.struktur')->name('struktur');
Route::view('/sejarah', 'pages.sejarah')->name('sejarah');
Route::view('/visi-misi', 'pages.visi-misi')->name('visi-misi');
Route::view('/tugas-fungsi', 'pages.tugas-fungsi')->name('tugas-fungsi');
Route::view('/program', 'pages.program')->name('program');
Route::view('/tujuan', 'pages.tujuan')->name('tujuan');
Route::view('/kontak', 'pages.kontak')->name('kontak');
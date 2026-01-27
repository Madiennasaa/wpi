<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Auth
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Tunggal untuk Artikel (Berita & Kegiatan)
Route::get('/artikel', [HomeController::class, 'blog'])->name('artikel.index');
Route::get('/artikel/{slug}', [HomeController::class, 'show'])->name('artikel.show');

Route::view('/struktur', 'pages.struktur')->name('struktur');
Route::view('/sejarah', 'pages.sejarah')->name('sejarah');
Route::view('/visi-misi', 'pages.visi-misi')->name('visi-misi');
Route::view('/tugas-fungsi', 'pages.tugas-fungsi')->name('tugas-fungsi');
Route::view('/program', 'pages.program')->name('program');
Route::view('/tujuan', 'pages.tujuan')->name('tujuan');
Route::view('/kontak', 'pages.kontak')->name('kontak');
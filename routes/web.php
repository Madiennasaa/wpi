<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/struktur', function () {
    return view('pages.struktur');
})->name('struktur');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/layanan', function () {
    return view('pages.layanan');
})->name('layanan');

Route::get('/artikel', function () {
    return view('pages.artikel');
})->name('artikel');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');


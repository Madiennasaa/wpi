<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/struktur', function () {
    return view('pages.struktur');
})->name('struktur');

Route::get('/sejarah', function () {
    return view('pages.sejarah');
})->name('sejarah');

Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
})->name('visi-misi');

Route::get('/tugas-fungsi', function () {
    return view('pages.tugas-fungsi');
})->name('tugas-fungsi');

Route::get('/program', function () {
    return view('pages.program');
})->name('program');

Route::get('/tujuan', function () {
    return view('pages.tujuan');
})->name('tujuan');

Route::get('/artikel', function () {
    return view('pages.artikel');
})->name('artikel');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');


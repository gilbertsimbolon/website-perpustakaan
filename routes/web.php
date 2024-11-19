<?php

use App\Http\Controllers\LibraryInformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/visi-misi', function() {
    return view('visi');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/kontak', function () {
    return view('kontak');
});
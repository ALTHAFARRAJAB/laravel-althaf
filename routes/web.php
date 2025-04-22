<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Route ke halaman daftar mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route ke halaman welcome (beranda)
Route::get('/', function () {
    return view('welcome');
});

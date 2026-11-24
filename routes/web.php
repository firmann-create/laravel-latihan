<?php

use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Soal 2: /daftar/mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index'])
    ->name('mahasiswa.index');

// Soal 3: /kalkulator/segitiga
Route::prefix('kalkulator')->name('kalkulator.')->group(function () {
    Route::get('/segitiga', [KalkulatorController::class, 'segitiga'])->name('segitiga');
    Route::post('/segitiga', [KalkulatorController::class, 'hitungSegitiga'])->name('segitiga.hitung');
});

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);
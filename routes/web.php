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

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga'])->name('kalkulator.segitiga');
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga'])->name('kalkulator.hitung');

//import controller EmployeController
use App\Http\Controllers\EmployeController;

//load controller
use App\Http\Controllers\AuthController;

//halaman login
Route::get('/login', function(){
    return view('login');
});

//route untuk proses login
Route::post('/login',[AuthController::class, 'cek']);

//route group yang harus login dahulu
Route::group(['middleware' => 'islogin'], function(){
    Route::get('/employe',[EmployeController::class, 'index']);
    Route::get('/employe/create',[EmployeController::class, 'create']);
    Route::post('/employe/store',[EmployeController::class, 'store']);
    Route::get('/employe/edit/{employe}',[EmployeController::class, 'show']);
    Route::put('/employe/{employe}',[EmployeController::class, 'update']);
    Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']);
    Route::get('/logout',[AuthController::class, 'logout']);
});

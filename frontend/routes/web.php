<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PembimbingController;

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('perusahaan', PerusahaanController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('pembimbing', PembimbingController::class);

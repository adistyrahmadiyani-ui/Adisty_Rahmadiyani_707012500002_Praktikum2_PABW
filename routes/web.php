<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

// Route ke halaman form pelaporan
Route::get('/lapor-banjir', [LaporBanjirController::class, 'form'])->name('lapor.form');

// Route untuk memproses data form pelaporan
Route::post('/lapor-banjir/proses', [LaporBanjirController::class, 'proses'])->name('lapor.proses');
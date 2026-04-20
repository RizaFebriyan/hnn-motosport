<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Halaman Beranda
Route::get('/', [PublicController::class, 'index'])->name('home');

// Halaman Stok Motor
Route::get('/stok-motor', [PublicController::class, 'stok'])->name('stok');
Route::get('/stok-motor/{slug}', [PublicController::class, 'show'])->name('stok.show');

// Halaman Tentang Kami
Route::get('/tentang-kami', [PublicController::class, 'tentang'])->name('tentang');

// Halaman Jual Kendaraan
Route::get('/jual-kendaraan', [PublicController::class, 'jual'])->name('jual');

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KoleksiBukuController;
use Illuminate\Support\Facades\Route;

// Home - Project Selection
Route::get('/', [HomeController::class, 'index'])->name('home');

// UTS Dashboard
Route::get('/uts', [HomeController::class, 'utsDashboard'])->name('uts.dashboard');

// UTS - Pendaftaran Mahasiswa
Route::get('/uts/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/uts/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/uts/data-mahasiswa', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::get('/uts/pendaftaran/{pendaftaran}/edit', [PendaftaranController::class, 'edit'])->name('pendaftaran.edit');
Route::put('/uts/pendaftaran/{pendaftaran}', [PendaftaranController::class, 'update'])->name('pendaftaran.update');
Route::delete('/uts/pendaftaran/{pendaftaran}', [PendaftaranController::class, 'destroy'])->name('pendaftaran.destroy');

// UTS - Produk & Profil
Route::get('/uts/produk', [HomeController::class, 'produk'])->name('uts.produk');
Route::get('/uts/profil', [HomeController::class, 'profil'])->name('uts.profil');

// UAS Dashboard
Route::get('/uas', [HomeController::class, 'uasDashboard'])->name('uas.dashboard');

// UAS - Koleksi Buku
Route::get('/uas/buku', [KoleksiBukuController::class, 'index'])->name('buku.index');
Route::get('/uas/buku/tambah', [KoleksiBukuController::class, 'create'])->name('buku.create');
Route::post('/uas/buku', [KoleksiBukuController::class, 'store'])->name('buku.store');
Route::get('/uas/buku/{buku}/edit', [KoleksiBukuController::class, 'edit'])->name('buku.edit');
Route::put('/uas/buku/{buku}', [KoleksiBukuController::class, 'update'])->name('buku.update');
Route::delete('/uas/buku/{buku}', [KoleksiBukuController::class, 'destroy'])->name('buku.destroy');

// UAS - Tentang
Route::get('/uas/tentang', [HomeController::class, 'tentang'])->name('uas.tentang');

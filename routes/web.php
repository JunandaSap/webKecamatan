<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KegiatanDesaController;


Route::get('/home', [BeritaController::class, 'berita']);
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AdminController::class, 'login']);
Route::get('/register', [AdminController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/register', [AdminController::class, 'register']);
Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/', [BeritaController::class, 'showBerita'])->name('home');
Route::get('/tambah_konten', function () {
    return view('tambah_konten');
});
Route::get('/tambah_konten', function () {
    return view('tambah_konten');
});

Route::get('/tambah_berita', [BeritaController::class, 'create']);
Route::post('/tambah_berita', [BeritaController::class, 'store'])->name('beritas.store');

Route::get('/tambah_pengumuman', [PengumumanController::class, 'create']);
Route::post('/tambah_pengumuman', [PengumumanController::class, 'store'])->name('pengumumans.store');

Route::get('/tambah_kegiatan', [KegiatanDesaController::class, 'create']);
Route::post('/tambah_kegiatan', [KegiatanDesaController::class, 'store'])->name('kegiatan_desas.store');
Route::get('/home', function () {
    return view('home');
});
Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});

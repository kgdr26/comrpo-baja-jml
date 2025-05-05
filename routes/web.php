<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\Layanan;
use App\Http\Controllers\Tentang;
use App\Http\Controllers\Menu;
use App\Http\Controllers\Galeri;
use App\Http\Controllers\Kontak;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Beranda::class, 'index'])->name('beranda');
Route::get('/beranda', [Beranda::class, 'index'])->name('beranda');

Route::get('/layanan', [Layanan::class, 'index'])->name('layanan');

Route::get('/tentang', [Tentang::class, 'index'])->name('tentang');

Route::get('/menu', [Menu::class, 'index'])->name('menu');

Route::get('/galeri', [Galeri::class, 'index'])->name('galeri');

Route::get('/kontak', [Kontak::class, 'index'])->name('kontak');
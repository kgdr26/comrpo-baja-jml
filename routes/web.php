<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Beranda.list');
});

Route::get('beranda', function () {
    return view('Beranda.list');
});

Route::get('layanan', function () {
    return view('Layanan.list');
});
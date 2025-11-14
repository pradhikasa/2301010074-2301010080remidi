<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Rute utama (Home)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk halaman About (BARU)
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Rute untuk halaman detail (tujuan Read More dummy)
Route::get('/universitas/{slug}', function ($slug) {
    return 'Halaman Detail Universitas: ' . $slug;
})->name('university.detail');
<?php

use App\Http\Controllers\kerjaPraktekController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halamanDosen', [kerjaPraktekController::class, 'index'])->name('halaman-dosen');
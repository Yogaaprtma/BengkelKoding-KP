<?php

use App\Http\Controllers\kerjaPraktekController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halamanDosen', [kerjaPraktekController::class, 'index'])->name('halaman-dosen');
Route::get('/tambah-pengajuan-bimbingan', [kerjaPraktekController::class, 'tambahPengajuan'])->name('tambah_pengajuan');
Route::get('/draft-pengajuan-bimbingan', [kerjaPraktekController::class, 'draftPengajuan'])->name('draft_pengajuan');
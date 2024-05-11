<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kerjaPraktekController extends Controller
{
    public function index()
    {
        return view('mahasiswa.daftarDosen');
    }

    public function tambahPengajuan()
    {
        return view('mahasiswa.form_tambahPengajuan');
    }

    public function draftPengajuan()
    {
        return view('mahasiswa.form_draftPengajuan');
    }
}

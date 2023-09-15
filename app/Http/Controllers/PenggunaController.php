<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function tambahPengguna()
    {
        return view('super-admin.tambah-pengguna');
    }
    public function riwayatPengguna()
    {
        return view('super-admin.riwayat-pengguna');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function dataPaket()
    {
        return view('/super-admin/data-paket');
    }
    public function tambahPaket()
    {
        return view('/super-admin/tambah-paket');
    }
    public function detailPaket()
    {
        return view('/super-admin/detail-paket');
    }
}

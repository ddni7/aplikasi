<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function kategoriBarang(){
        return view('/super-admin/kategori');
    }
    public function dataBarang(){
        return view('/super-admin/data-barang');
    }
    
}

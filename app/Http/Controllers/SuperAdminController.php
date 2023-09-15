<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('super-admin.index');
    }
    public function dataPengguna()
    {
        return view('super-admin.data-pengguna');
    }
    public function login()
    {
        return view('login');
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layouts/dashboard');
    }

    // Tambahkan method profile untuk menampilkan halaman profile
        public function profile(): string
    {
        return view('layouts/profile');
    }
}

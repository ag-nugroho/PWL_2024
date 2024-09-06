<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutContoller extends Controller
{
    public function index() {
        return 'Nama saya Agung Nugroho';
    }

    public function about() {
        return 'Saya adalah seorang mahasiswa di Politeknik Negeri Malang';
    }
}

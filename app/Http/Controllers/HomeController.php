<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return 'Halo Selamat Datang di Website Agung';
    }
}

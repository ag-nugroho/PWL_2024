<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Agung Nugroho, 2241760135';
    }

    public function articles($post, $comment) {
        return 'Judul : ' . $post . ', Komentar : ' . $comment;
    }

    // public function articles($getId) {
    //     return 'Urutan ke-'.$getId;
    // }
}

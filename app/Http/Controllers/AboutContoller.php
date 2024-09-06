<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutContoller extends Controller
{
    public function index() {
        return view('about');
    }
}

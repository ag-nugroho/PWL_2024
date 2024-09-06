<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($post, $comment) {
        return 'Pos ke-' . $post . ', Komentar : ' . $comment;
    }
}

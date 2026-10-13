<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index() {
        $posts = ['post1', 'post2'];
        //return view('contact', ['post' => $posts]);
        return view('contact', compact('posts'));
    }

    function otro ($post=12, $otro=33) {
        echo $post;
        echo $otro;
    }
}

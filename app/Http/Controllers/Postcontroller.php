<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', ['Post' => $posts]);
    }
}

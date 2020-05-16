<?php

namespace App\Http\Controllers;
use App\Blog;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function blog()
    {
        $blogs = Blog::all();

        return view('blog', compact('blogs'));
    }

}

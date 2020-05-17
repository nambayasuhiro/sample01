<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function profile()
    {
        $profiles = profile::all();

        return view('profile');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Landing.welcome'); // Anggap saja template homepage Anda disimpan dalam file welcome.blade.php
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movie.index');
    }

    public function create()
    {
        return view('movie.create');
    }

    public function edit()
    {
        return view('movie.edit');
    }
}

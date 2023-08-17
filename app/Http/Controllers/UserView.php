<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserView extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function about()
    {
        return view('about');
    }

    public function gallery()
    {
        return view('gallery');
    }
}

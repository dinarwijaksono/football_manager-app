<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Club_controller extends Controller
{
    public function index()
    {
        return view('Club/index');
    }


    public function tim()
    {
        return view('Club/tim');
    }
}

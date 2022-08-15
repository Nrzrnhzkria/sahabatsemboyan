<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('landingpage.home');
    }

    public function keahlian()
    {
        return view('landingpage.keahlian');
    }

    public function hubungi()
    {
        return view('landingpage.hubungi');
    }
}

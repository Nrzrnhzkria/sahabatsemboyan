<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        return view('landingpage.shop');
    }

    public function view()
    {
        return view('landingpage.shopview');
    }
}

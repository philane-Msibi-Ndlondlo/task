<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function viewHome()
    {
        return view('home');
    }

    public function getRates()
    {
        return Currency::getRates();
    }
}

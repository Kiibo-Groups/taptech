<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing.index');
    }

    public function shop() {

        return view('landing.shop');
    }

    public function companies() {

        return view('landing.companies');
    }
}

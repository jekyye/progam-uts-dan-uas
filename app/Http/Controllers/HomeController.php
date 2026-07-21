<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function utsDashboard()
    {
        return view('uts.dashboard');
    }

    public function uasDashboard()
    {
        return view('uas.dashboard');
    }

    public function produk()
    {
        return view('uts.produk');
    }

    public function profil()
    {
        return view('uts.profil');
    }

    public function tentang()
    {
        return view('uas.tentang');
    }
}

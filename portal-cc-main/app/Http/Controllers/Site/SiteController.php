<?php

namespace App\Http\Controllers\Site;

class SiteController
{
    public function index()
    {
        return view('site/index');
    }

    public function tcc()
    {
        return view('site/tcc');
    }

    public function menu()
    {
        return view('site/menu');
    }
}
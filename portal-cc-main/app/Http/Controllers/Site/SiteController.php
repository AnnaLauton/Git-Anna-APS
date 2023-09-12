<?php

namespace App\Http\Controllers\Site;

class SiteController
{
    public function index()
    {
        return view('site/index');
    }

    public function cadastro_tcc()
    {
        return view('site/cadastro_tcc');
    }

    public function lista_tcc()
    {
        return view('site/lista_tcc');
    }

    public function menu()
    {
        return view('site/menu');
    }
}
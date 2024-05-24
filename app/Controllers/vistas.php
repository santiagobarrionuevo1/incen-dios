<?php

namespace App\Controllers;

class vistas extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function productos()
    {
        return view('productos');
    }
}

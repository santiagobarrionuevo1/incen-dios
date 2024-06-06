<?php

namespace App\Controllers;

class vistas extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function productos()
    {
        return view('productos');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function servicios()
    {
        return view('servicios');
    }
}

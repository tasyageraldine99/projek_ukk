<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function menu()
    {
        return view('menu');
    }
    public function user()
    {
        return view('user');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('backend.home');
    }
    public function register()
    {
        return view('backend.register');
    }
    public function login()
    {
        return view('backend.login');
    }
}

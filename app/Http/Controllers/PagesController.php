<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('user.dashboard');
    }

    public function dashboard(){
        return view('user.dashboard');
    }

    public function logout()
    {
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('main.login');
    }

    public function login(){
        return view('main.dashboard');
    }
}

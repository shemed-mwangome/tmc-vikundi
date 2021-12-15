<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('main.login');
    }

    public function login()
    {
        return view('main.dashboard');
    }

    public function dashboard(){
        return view('main.dashboard');
    }

    public function logout()
    {
        return redirect('/');
    }

    // Registration
    public function reg_dashboard()
    {
        return view('registration.index');
    }
    public function reg_all()
    {
        return view('registration.all');
    }
    public function reg_search()
    {
        return view('registration.search');
    }
    public function reg_new()
    {
        return view('registration.new');
    }
    public function reg_uploads()
    {
        return view('registration.uploads');
    }
    public function reg_certificate()
    {
        return view('registration.certificate');
    }
    public function reg_report()
    {
        return view('registration.report');
    }




}

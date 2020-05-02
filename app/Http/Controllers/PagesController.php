<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('search');
    }

    public function login()
    {
        return view('login');
    }

    public function bantuan()
    {
        return 'Bantuan';
    }

    public function all()
    {
        return view('admin/all');
    }

    public function profil()
    {
        return view('admin/profil');
    }
}

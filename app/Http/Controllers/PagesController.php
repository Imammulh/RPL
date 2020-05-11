<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    // user
    public function home()
    {
        return view('search');
    }

    public function bantuan()
    {
        return 'Bantuan';
    }
}

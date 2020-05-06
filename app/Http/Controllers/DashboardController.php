<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    // admin
    public function profil()
    {
        return view('admin/profil');
    }

    public function all()
    {
        $data_ktp = \App\Data_ktp::all();
        return view('admin/all', ['data_ktp' => $data_ktp]);
    }

    public function process()
    {
        return view('admin/process');
    }

    public function done()
    {
        return view('admin/done');
    }
}

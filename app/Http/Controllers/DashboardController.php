<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function tambah()
    {
        return view('admin/tambah');
    }

    public function store(Request $request)
    {
        \App\Data_ktp::create($request->all());
        return redirect('dashboard-all')->with('sukses', 'Data berhasil ditambah!');
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

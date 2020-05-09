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

    // fungsi create data
    public function tambah()
    {
        return view('admin/tambah');
    }

    public function store(Request $request)
    {
        \App\Data_ktp::create($request->all());
        return redirect('dashboard-all')->with('sukses', 'Data berhasil ditambah!');
    }
    // end

    // fungsi edit data
    public function edit($id)
    {
        $ktp = \App\Data_ktp::find($id);
        return view('admin/edit', ['ktp' => $ktp]);
    }

    public function update(Request $request, $id)
    {
        $ktp = \App\Data_ktp::find($id);
        $ktp->update($request->all());

        return redirect('dashboard-all')->with('sukses', 'Data berhasil diupdate!');
    }
    // end

    // fungsi delete data
    public function delete($id)
    {
        $ktp = \App\Data_ktp::find($id);
        $ktp->delete($ktp);

        return redirect('dashboard-all')->with('sukses', 'Data berhasil dihapus!');
    }
    // end

    public function process()
    {
        return view('admin/process');
    }

    public function done()
    {
        return view('admin/done');
    }
}

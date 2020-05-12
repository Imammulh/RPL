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

    public function all(Request $request)
    {
        if ($request->has('cari')) {
            $data_ktp = \App\Data_ktp::where('nik', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_ktp = \App\Data_ktp::all();
        }
        return view('admin/all', ['data_ktp' => $data_ktp]);
    }

    // fungsi create data
    public function tambah()
    {
        return view('admin/tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:16',
            'nama' => 'required|max:100',
            'kota_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|max:100',
            'jenis_kelamin' => 'required|max:1',
            'alamat' => 'required|max:100',
            'kewarganegaraan' => 'required|max:3',
            'email' => 'required|email|max:100',
            'status_ektp' => 'required|max:100',
        ]);
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
        $this->validate($request, [
            'email' => 'required|max:16',
            'nama' => 'required|max:100',
            'kota_lahir' => 'required|max:100',
            'tanggal_lahir' => 'required|max:100',
            'jenis_kelamin' => 'required|max:1',
            'alamat' => 'required|max:100',
            'kewarganegaraan' => 'required|max:3',
            'email' => 'required|email|max:100',
            'status_ektp' => 'required|max:100',
        ]);
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

    public function process(Request $request)
    {
        if ($request->has('cari')) {
            $this->validate($request, [
                'cari' => 'required',
            ]);
            $data_ktp = \App\Data_ktp::where('nik', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_ktp = \App\Data_ktp::where('status_ektp', '=', 'Diproses')->get();
        }
        return view('admin/process', ['data_ktp' => $data_ktp]);
    }

    public function done(Request $request)
    {
        if ($request->has('cari')) {
            $this->validate($request, [
                'cari' => 'required',
            ]);
            $data_ktp = \App\Data_ktp::where('nik', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_ktp = \App\Data_ktp::where('status_ektp', '=', 'Selesai')->get();
        }
        return view('admin/done', ['data_ktp' => $data_ktp]);
    }
}

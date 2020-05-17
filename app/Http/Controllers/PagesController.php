<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // user
    public function home()
    {
        return view('search');
    }

    public function bantuan()
    {
        return view('bantuan');
    }

    public function info(Request $request)
    {
        if ($request->has('cariinfo')) {
            $data_ktp = \App\Data_ktp::where('nik', $request->cariinfo )->get();
        }
        return view('info', ['data_ktp' => $data_ktp]);
    }
}

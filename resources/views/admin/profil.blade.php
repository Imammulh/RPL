@extends('admin/layouts/master')

@section('css', 'css/styleDashboardProfile.css')
@section('title', 'Dashboard Profil')

@section('main')
    <!-- main -->
    <div class="dashboardProfil">
        <div class="container">
            <div class="head">
                <div class="row text">
                    <h2 class="col-12 font-weight-bold">Profil</h2>
                    <p class="col-12">Welcome back,<br>{{Auth()->user()->nama_kecamatan}}</p>
                </div>
                <div class="d-flex button">
                <a href="{{Auth()->user()->id}}/editprofil"class="btn btn-info ml-auto">EDIT</a>
                </div>
            </div>

            <div class="profilBox">
                <div class="row">
                    <ul>
                        <li>
                            <label for="namaKecamatan">Nama Kecamatan</label>
                            <p class="font-weight-bold" id="namaKecamatan">{{Auth()->user()->nama_kecamatan}}</p>
                        </li>
                        <li>
                            <label for="alamatKecamatan">Alamat Kecamatan</label>
                            <p class="font-weight-bold" id="alamatKecamatan">{{Auth()->user()->alamat_kecamatan}}</p>
                        </li>
                        <li>
                            <label for="namaCamat">Camat</label>
                            <p class="font-weight-bold" id="namaCamat">{{Auth()->user()->camat}}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end main -->
@endsection

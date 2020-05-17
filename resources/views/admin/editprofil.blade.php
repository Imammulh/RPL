@extends('admin/layouts/master')

@section('css', 'css/styleEditData.css')
@section('title', 'Edit Profil')

@section('main')
    {{-- main --}}
    <div class="container">
        <div class="d-flex flex-column">
                <h2>Edit Profil Admin</h2>
        <form action="/{{Auth()->user()->id}}/updateprofil" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="nama_kecamatan">Nama Kecamatan : </label>
                    <input type="text" class="form-control" id="nama_kecamatan" placeholder="Masukkan nama kecamatan..." name="nama_kecamatan" value="{{$admin->nama_kecamatan}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="alamat_kecamatan">Alamat Kecamatan : </label>
                    <input type="text" class="form-control" id="alamat_kecamatan" placeholder="Masukkan alamat kecamatan..." name="alamat_kecamatan" value="{{$admin->alamat_kecamatan}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="camat">Nama Camat : </label>
                    <input type="text" class="form-control" id="camat" placeholder="Masukkan nama camat..." name="camat" value="{{$admin->camat}}">
                    </div>
                </div>
            </div>

            {{-- button --}}
            <a href="/dashboard-profil" class="btn btn-danger mr-3">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    {{-- end main --}}
@endsection
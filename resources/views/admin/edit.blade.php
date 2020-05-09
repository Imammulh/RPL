@extends('admin/layouts/master')

@section('css', 'css/styleEditData.css')
@section('title', 'Edit data e-KTP')

@section('main')
    <div class="main">
        <div class="container">
            <div class="d-flex flex-column">
                <h1>Edit Data e-KTP</h1>
                <form action="/{{$ktp->id}}/update" method="post" class="mt-4" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" value="{{$ktp->nik}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" value="{{$ktp->nama}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kota_lahir">Kota Lahir</label>
                                <input type="text" class="form-control" id="kota_lahir" name="kota_lahir" placeholder="Kota lahir" value="{{$ktp->kota_lahir}}">
                            </div>

                        </div>
                        <div class="col-6">

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="hari-bulan-tahun" value="{{$ktp->tanggal_lahir}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="L" @if($ktp->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                    <option value="P" @if($ktp->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                                <label for="agama">Agama</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="islam" @if($ktp->agama == 'islam') selected @endif>Islam</option>
                                    <option value="kristen protestan" @if($ktp->agama == 'kristen protestan') selected @endif>Kristen protestan</option>
                                    <option value="katolik" @if($ktp->agama == 'katolik') selected @endif>Katolik</option>
                                    <option value="buddha" @if($ktp->agama == 'buddha') selected @endif>Buddha</option>
                                    <option value="hindu" @if($ktp->agama == 'hindu') selected @endif>Hindu</option>
                                    <option value="kong hu cu" @if($ktp->agama == 'kong hu cu') selected @endif>Kong Hu Cu</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" value="{{$ktp->alamat}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                    <option value="WNI" @if($ktp->kewarganegaraan == 'WNI') selected @endif>WNI</option>
                                    <option value="WNA" @if($ktp->kewarganegaraan == 'WNA') selected @endif>WNA</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="status_pekerjaan">Status Pekerjaan</label>
                                <input type="text" class="form-control" id="status_pekerjaan" name="status_pekerjaan" placeholder="Masukkan status pekerjaan" value="{{$ktp->status_pekerjaan}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@yourmail.com" value="{{$ktp->email}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="status_ektp">Status e-KTP</label>
                                <select class="form-control" id="status_ektp" name="status_ektp">
                                    <option value="Diproses" @if($ktp->status_ektp == 'Diproses') selected @endif>Diproses</option>
                                    <option value="Selesai" @if($ktp->status_ektp == 'Selesai') selected @endif>Selesai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ml-auto">
                            <!-- button -->
                            <a href="/dashboard-all" class="btn btn-outline-danger mr-3">Cancel</a>
                            <button type="submit" class="btn btn-warning px-4">EDIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

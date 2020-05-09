@extends('admin/layouts/master')

@section('css', 'css/styleTambahData.css')
@section('title', 'Tambah data e-KTP')

@section('main')
    <div class="main">
        <div class="container">
            <div class="d-flex flex-column">
                <h1>Tambah Data e-KTP</h1>
                <form action="/dashboard-all" method="post" class="mt-4" autocomplete="off">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="kota_lahir">Kota Lahir</label>
                            <input type="text" class="form-control" id="kota_lahir" name="kota_lahir" placeholder="Kota lahir">
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="hari-bulan-tahun">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="agama">agama</label>
                            <select name="agama" class="form-control" id="agama">
                                <option value="islam">Islam</option>
                                <option value="kristen protestan">Kristen protestan</option>
                                <option value="katolik">Katolik</option>
                                <option value="buddha">Buddha</option>
                                <option value="hindu">Hindu</option>
                                <option value="kong hu cu">Kong Hu Cu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="status_pekerjaan">Status Pekerjaan</label>
                            <input type="text" class="form-control" id="status_pekerjaan" name="status_pekerjaan" placeholder="Masukkan status pekerjaan">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                            <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                <option value="WNI">WNI</option>
                                <option value="WNA">WNA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@yourmail.com">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="status_ektp">Status e-KTP</label>
                            <select class="form-control" id="status_ektp" name="status_ektp">
                                <option value="Diproses">Diproses</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- button -->
                    <div class="ml-auto">
                        <a href="/dashboard-all" class="btn btn-outline-danger mr-3">Cancel</a>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

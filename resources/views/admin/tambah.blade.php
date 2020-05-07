@extends('admin/layouts/master')

@section('css', 'css/styleTambahData.css')
@section('title', 'Dashboard All')

@section('main')
    <div class="main">
        <div class="container">
            <div class="d-flex flex-column">
                <h1>Tambah Data e-KTP</h1>
                <form action="/dashboard-all" method="post" class="mt-4" autocomplete="off">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                    </div>

                    <div class="form-group">
                        <label for="kota_lahir">Kota Lahir</label>
                        <input type="text" class="form-control" id="kota_lahir" name="kota_lahir" placeholder="Kota lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="hari-bulan-tahun">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
                    </div>

                    <div class="form-group">
                        <label for="status_pekerjaan">Status Pekerjaan</label>
                        <input type="text" class="form-control" id="status_pekerjaan" name="status_pekerjaan" placeholder="Masukkan status pekerjaan">
                    </div>

                    <div class="form-group">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@yourmail.com">
                    </div>

                    <div class="form-group">
                        <label for="status_ektp">Status e-KTP</label>
                        <select class="form-control" id="status_ektp" name="status_ektp">
                            <option value="Diproses">Diproses</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>

                    <!-- button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

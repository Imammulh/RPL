@extends('admin/layouts/master')

@section('css', 'css/styleDashboardAll.css')
@section('title', 'Dashboard e-KTP Diproses')

@section('main')
    <!-- main -->
    <div class="dashboardAll">
        <div class="container">
            <div class="head">
                <div class="row text">
                    <h2 class="col-12 font-weight-bold">Data e-KTP Dalam Proses</h2>
                </div>
                @if(session('sukses'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success" role="alert">
                            {{session('sukses')}}
                        </div>
                    </div>
                </div>
                @endif
                <div class="d-flex flex-row justify-content-between button">
                    <form class="form-inline" action="" method="">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <a href="/tambah-ektp" class="btn btn-primary">TAMBAH e-KTP</a>
                </div>
            </div>

            <!-- table -->
            <div class="table-overflow">
                <table class="table table-striped bg-white">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col-1">No</th>
                            <th scope="col-4">Nama</th>
                            <th scope="col-3">NIK</th>
                            <th scope="col-2">Status</th>
                            <th scope="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1?>
                    @foreach($data_ktp as $ktp)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $ktp->nama }}</td>
                            <td>{{ $ktp->nik }}</td>
                            <td @if($ktp->status_ektp == 'Diproses')
                                    class="font-weight-bold text-warning"
                                @else($ktp->status_ektp == 'Selesasi')
                                    class="font-weight-bold text-success"
                                @endif>{{ $ktp->status_ektp }}</td>
                            <td>
                                <a class="btn-sm btn-info mr-2 text-white" data-toggle="modal" data-target="#{{$ktp->id}}" style="cursor: pointer;">SHOW</a>
                                <a href="/{{ $ktp->id }}/edit" class="btn-sm btn-warning mr-2 text-white">EDIT</a>
                                <a href="/{{ $ktp->id}}/delete" onclick="return confirm('Apakah anda yakin data e-KTP ini ingin di hapus?')"class="btn-sm btn-danger">DELETE</a>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="{{$ktp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header  bg-primary">
                                <h5 class="modal-title text-white font-weight-bold" id="exampleModalLongTitle">Data e-KTP</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul class="">
                                    <li class="">
                                        <label for="nama">NIK:</label>
                                        <p>{{ $ktp->nik }}</p>
                                    </li>
                                    <li class="">
                                        <label for="nama">Nama:</label>
                                        <p>{{ $ktp->nama }}</p>
                                    </li>
                                    <li class="">
                                        <label for="nama">Kota, Tanggal Lahir:</label>
                                        <p>{{ $ktp->kota_lahir }}, {{ $ktp->tanggal_lahir}}</p>
                                    </li>
                                    <li class="">
                                        <label for="nama">Jenis Kelamin:</label>
                                        <p>@if($ktp->jenis_kelamin == 'L')
                                                Laki-laki
                                            @else
                                                Perempuan
                                            @endif
                                        </p>
                                    </li>
                                    <li class="">
                                        <label for="nama">Agama:</label>
                                        <p>{{ $ktp->agama }}</p>
                                    </li>
                                    <li class="" >
                                        <label for="nama">Alamat:</label>
                                        <p>{{ $ktp->alamat }}</p>
                                    </li>
                                    <li class="">
                                        <label for="nama">Status Pekerjaan:</label>
                                        <p>{{ $ktp->status_pekerjaan }}</p>
                                    </li>
                                    <li class="">
                                        <label for="nama">Kewarganegaraan:</label>
                                        <p>{{ $ktp->kewarganegaraan }}</p>
                                    </li>
                                    <li class="">
                                        <label for="nama">Email:</label>
                                        <p>{{ $ktp->email }}</p>
                                    </li>
                                    <li class="">
                                        <label for="nama">Status e-KTP:</label>
                                        <p>{{ $ktp->status_ektp }}</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    <!-- end modal -->
                    <?php $i++?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end table -->


    <!-- end main -->
@endsection

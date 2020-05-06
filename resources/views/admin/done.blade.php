@extends('admin/layouts/master')

@section('css', 'css/styleDashboardAll.css')
@section('title', 'Dashboard e-KTP Selesai Diproses')

@section('main')
    <!-- main -->
    <div class="dashboardAll">
        <div class="container">
            <div class="head">
                <div class="row text">
                    <h2 class="col-12 font-weight-bold">Data e-KTP Selesai Diproses</h2>
                </div>
                <div class="d-flex flex-row justify-content-between button">
                    <form class="form-inline" action="" method="">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <a href="#" class="btn btn-primary">TAMBAH e-KTP</a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Imam Mulhaq Rosyadi</td>
                            <td>01679765443368363</td>
                            <td>Diproses</td>
                            <td><a href="#" class="btn btn-info mr-2">EDIT</a><a href="#"
                                    class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Imam Mulhaq Rosyadi</td>
                            <td>01679765443368363</td>
                            <td>Diproses</td>
                            <td><a href="#" class="btn btn-info mr-2">EDIT</a><a href="#"
                                    class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Imam Mulhaq Rosyadi</td>
                            <td>01679765443368363</td>
                            <td>Diproses</td>
                            <td><a href="#" class="btn btn-info mr-2">EDIT</a><a href="#"
                                    class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Imam Mulhaq Rosyadi</td>
                            <td>01679765443368363</td>
                            <td>Diproses</td>
                            <td><a href="#" class="btn btn-info mr-2">EDIT</a><a href="#"
                                    class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Imam Mulhaq Rosyadi</td>
                            <td>01679765443368363</td>
                            <td>Diproses</td>
                            <td><a href="#" class="btn btn-info mr-2">EDIT</a><a href="#"
                                    class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Imam Mulhaq Rosyadi</td>
                            <td>01679765443368363</td>
                            <td>Diproses</td>
                            <td><a href="#" class="btn btn-info mr-2">EDIT</a><a href="#"
                                    class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

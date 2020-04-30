@extends('template/main')

@section('title', 'Info KTP')
@section('css', 'css/styleSearch.css')

@section('main')
    <!-- main -->
    <div class="searchKtp">
        <div class="container">
            <div class="row illus justify-content-center">
                <img src="asset/illussearch.png" alt="illustrasi">
                <div class="col-12 text-center">
                    <h3>Cari tahu e-KTP mu</h3>
                    <p>Lakukan pencarian e-KTP mu menggunakan NIK untuk mengetahui proses pembuatan e-KTP mu.</p>
                </div>
            </div>

            <div class="searchBox mx-auto">
                <form action="">
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" autofocus class="form-control" id="inputNik" aria-describedby="emailHelp"
                            placeholder="Masukkan NIK anda">
                    </div>
                    <button class="btn btn-primary" type="submit" name="cari">CARI</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end main -->
@endsection

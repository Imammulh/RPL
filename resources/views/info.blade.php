@extends('template/main')

@section('title', 'Info KTP')
@section('css', 'css/styleInfo.css')
@section('main')

<div class="searchKtp">
    <div class="container">
    	<div class="row illus justify-content-center">
            <img src="asset/illussearch.png" alt="illustrasi">
                <div class="col-12 text-center">
                    <h3>Info e-KTP mu</h3>
                </div>
        </div>
        <div class="searchBox mx-auto">
            @foreach($data_ktp as $ktp)
                <div class="form-group">
                    <ul class="modal-body">
                        <li class="">
                            <label for="nama">NIK:</label>
                            <p>{{ $ktp->nik }}</p>
                        </li>
                        <li class="">
                            <label for="nama">Nama:</label>
                             <p><b>{{ $ktp->nama }}</b></p>
                        </li class="">
                        	<label for="nama">Tanggal Dibuat:</label>
                        	<p>{{ $ktp->created_at }}</p>
                        </li>
                        <li class="">
                            <label for="nama">Status e-KTP:</label>
                            <p
                            @if($ktp->status_ektp == 'Diproses')
                                class="font-weight-bold text-warning"
                            @else($ktp->status_ektp == 'Selesasi')
                                class="font-weight-bold text-success"
                            @endif
                            >
                            	{{ $ktp->status_ektp }}
                            </p>
                        </li>
                    </ul>
                </div>
      		@endforeach
      		<a href="/" class="text-center">
      			<p class="font-weight-bold">Kembali</p>
      		</a>
        </div>
    </div>
</div>


@endsection
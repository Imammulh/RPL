@extends('template/main')

@section('title', 'Bantuan')
@section('css', 'css/styleBantuan.css')

@section('main')

    {{-- main --}}
    <div class="bantuan mx-auto">
        <div class="container">
            <div class="row head">
                <img class="col-12 mx-auto" src="asset/qmark.png">
                <h3 class="col-12 font-weight-bold text-center">Frequently Asked Question</h3>
            </div>

            <div class="FAQ">
                <div id="accordion">
                    <div class="card mx-auto">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <font color="2F80ED">Apa itu Info e-KTP</font>
                          </button>
                        </h5>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Info e-KTP adalah sebuah web yang membantu kamu mengetahui informasi tentang pembuatan e-KTP mu. jadi kamu tidak perlu lagi ke kecamatan untuk mengetahui kapan e-KTPmu selesai dibuat.
                        </div>
                      </div>
                    </div>
                    <div class="card mx-auto">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <font color="2F80ED">Bagaimana cara mengetahui proses pembuatan e-KTP</font>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Kamu hanya perlu ke halaman <a href="">SEARCH KTP</a> lalu masukkan NIK kamu dikolom yang telah disediakan.
                        </div>
                      </div>
                    </div>
                    <div class="card mx-auto">
                        <div class="card-header" id="headingTwo">
                          <h5 class=mb-0>
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <font color="2F80ED">Apa saja yang perlu dipersiapkan untuk membuat e-KTP</font>
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                        
                            Sebelum mendaftar, pastikan kamu :
                            <ul>
                              <li>WNI dan berumur 17 tahun</li>
                              <li>WNA yang memiliki ITAP(Izin Tinggal Tetap dan minimal berusia 17 tahun</li>
                            </ul>
                            JIka kamu adalah salah satu dari kategori diatas, berkas berkas yang kamu butuhkan :
                            <ul>
                                <li>Surat Pengantar dari RT/RW</li>
                                <li>Fotokopi Kartu Keluarga</li>
                                <li>Fotokopi kutipan akta nikah (bagi yang sudah menikah)</li>
                                <li>Surat keterangan pindah dari Disdukcapil daerah asal (bagi WNI yang pindah dari satu daerah</li>
                                <li>Surat Izin Tinggal Tetap (bagi WNA)</li>
                                <li>Mengisi formulir permohonan pembuatan e-KTP baru di Kecamatan saat mendaftar</li>
                            </ul>
                            Lalu bawa berkas-berkas ini ke kecamatan terdekatmu.
                            
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    {{-- end main --}}

@endsection

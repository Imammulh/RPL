@extends('template/main')

@section('title', 'Log In Admin Kelurahan')
@section('css', 'css/styleLogin.css')

@section('main')
    <!-- main -->
    <div class="login">
        <div class="container">
            <div class="row head">
                <img class="col-12 mx-auto" src="asset/illuslogin.png" alt="illustrasi">
                <h3 class="col-12 font-weight-bold text-center">LOG IN Admin</h3>
            </div>

            <div class="loginBox mx-auto">
                @if(session('gagal'))
                <div class="alert alert-danger" role="alert">
                    {{session('gagal')}}
                </div>
                @endif
                <form action="/postlogin" method="POST">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="username">User name</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan username..." name="username" autocomplete="off"
                            autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group-append">
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password..."
                            autofocus name="password" data-toggle="password">
                                <div class="input-group-text"><i class="fa fa-eye" id="eye"></i></div>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">LOG IN</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end main -->

@endsection

@section('script')
    <script>
        var password = document.getElementById('password');
        var eye = document.getElementById('eye');

        eye.addEventListener('click', togglePass);

        function togglePass()
        {
            eye.classList.toggle('active');

            (password.type == 'password') ? password.type = 'text' :
            password.type = 'password';
        }

    </script>
@endsection

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
                <form>
                    <div class="form-group">
                        <label for="username">User name</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan username..."
                            autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan password..."
                            autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary">LOG IN</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end main -->

@endsection

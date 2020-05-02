<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="@yield('css')">
    <title>@yield('title')</title>
</head>

<body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a href="{{ url('/dashboard-profil') }}" class="navbar-brand">
                <h2>Kecamatan Dramaga</h2>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2"><a href="{{ url('/dashboard-all' )}}" class="nav-link">All e-KTP</a></li>
                    <li class="nav-item mx-md-2"><a href="{{ url('/dashboard-process') }}" class="nav-link">e-KTP Process</a></li>
                    <li class="nav-item mx-md-2"><a href="{{ url('/dashboard-done') }}" class="nav-link">e-KTP Done</a></li>
                </ul>

                <button class="btn btn-primary" type="button">LOG OUT</button>
            </div>
        </div>
    </nav>
    <!-- end nav bar -->

    <!-- main -->
    @yield('main')
    <!-- end main -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>

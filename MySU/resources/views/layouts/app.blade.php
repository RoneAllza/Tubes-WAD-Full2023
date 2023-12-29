<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySU</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view-source:https://roneallza.github.io/Penghuni-Website/css/main.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('home') }}" style="color:#f8f9fa">
            ===<img src="https://roneallza.github.io/Penghuni-Website/img/logo_msu.webp" alt="PSU Logo" height="56" width="94">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fitur-Fiturnya
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('user_management') }}">User Management</a>
                        <a class="dropdown-item" href="{{ url('kegiatan_tahfizhs') }}">Kegiatan Tahfizh</a>
                        <a class="dropdown-item" href="{{ url('piket') }}">Piket</a>
                        <a class="dropdown-item" href="{{ url('kegiatanpembinaan') }}">Pembinaan</a>
                        <a class="dropdown-item" href="{{ url('aktifitasmingguan') }}">Weekly</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" style="font-size: 15px"><strong>Log Out</strong></a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>


    <footer class="bg-success text-white p-3 mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    Created By Syamsul Ulum Creative Co.
                </div>
            </div>
        </div>
    </footer>
    <!-- Include Bootstrap JS and Popper.js for Bootstrap components -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></body>
</html>

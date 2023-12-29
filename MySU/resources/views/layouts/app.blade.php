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
        <div class="container">
            <a class="navbar-brand" href="{{ url('home') }}">
                <img src="https://roneallza.github.io/Penghuni-Website/img/logo_msu.webp" alt="PSU Logo" height="56" width="94">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user_management.index') }}" style="font-size: 15px"><strong>User Management</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kegiatan_tahfizhs.index') }}" style="font-size: 15px"><strong>Kegiatan Tahfizh</strong></a>
                </li>
                <!-- Tambahkan menu lain sesuai kebutuhan -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

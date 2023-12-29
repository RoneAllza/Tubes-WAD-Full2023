@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="container mt-5">
        <h1>Selamat Datang di MySU!</h1>
        <p class="lead">Solusi digital untuk keasramaan dan masjid Syamsul Ulum</p>
        <!-- Tombol-tombol menuju fitur-fitur -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block mb-2">Aktivitas Mingguan</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block mb-2">Aktivitas Pembinaan</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block mb-2">Kegiatan Tahfidz</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block mb-2">Perizinan Pulang</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block mb-2">Piket</a>
            </div>
        </div>
        <!-- About Us -->
        <div class="row">
            <div class="col-md-12">
                <h2>About Us</h2>
                <p>Aplikasi yang memungkinkan anggota Dewan Kemakmuran Masjid (DKM) untuk mencatat dan melaporkan kegiatan harian mereka, seperti jumlah sholat yang dilakukan.</p>
            </div>
        </div>
        <!-- Akhir dari konten utama lainnya -->
    </main>
@endsection

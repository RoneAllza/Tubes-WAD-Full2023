@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="container mt-5">
        <h1 class="text-center">Selamat Datang di MySU!</h1>
        <p class="lead text-center">Solusi digital untuk keasramaan dan masjid Syamsul Ulum</p>
        <!-- Kotak-kotak fitur -->
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="feature-box border p-3">
                    <a href="#">
                        <img src="{{ asset('IMG/Mingguan.jpg') }}" alt="Aktivitas Mingguan" class="img-fluid mb-3">
                        <div class="feature-text">
                            <h3 class="btn btn-primary">Aktivitas Mingguan</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-box border p-3">
                    <a href="#">
                        <img src="{{ asset('IMG/Pembinaan.jpg') }}" alt="Aktivitas Pembinaan" class="img-fluid mb-3">
                        <div class="feature-text">
                            <h3 class="btn btn-primary">Aktivitas Pembinaan</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-box border p-3">
                    <a href="#">
                        <img src="{{ asset('IMG/Tahfidz.jpg') }}" alt="Kegiatan Tahfidz" class="img-fluid mb-3">
                        <div class="feature-text">
                            <h3 class="btn btn-primary">Kegiatan Tahfidz</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-box border p-3">
                    <a href="#">
                        <img src="{{ asset('IMG/Izin.jpg') }}" alt="Perizinan Pulang" class="img-fluid mb-3">
                        <div class="feature-text">
                            <h3 class="btn btn-primary">Perizinan Pulang</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-box border p-3">
                    <a href="#">
                        <img src="{{ asset('IMG/Piket.jpg') }}" alt="Piket" class="img-fluid mb-3">
                        <div class="feature-text">
                            <h3 class="btn btn-primary">Piket</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- About Us -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>About Us</h2>
                <p>Aplikasi yang memungkinkan anggota Dewan Kemakmuran Masjid (DKM) untuk mencatat dan melaporkan kegiatan harian mereka, seperti jumlah sholat yang dilakukan.</p>
            </div>
        </div>
        <!-- Akhir dari konten utama lainnya -->
    </main>
@endsection

@extends('layouts.app')

@section('content')
    
    <link href="{{ asset('css/features.css') }}" rel="stylesheet">
    <!-- Main Content -->
    <main class="container mt-5">
        <h1>Selamat Datang di MySU!</h1>
        <p class="lead">Solusi digital untuk keasramaan dan masjid Syamsul Ulum</p>
<!-- Kotak-kotak fitur -->
<div class="row">
            <div class="col-md-4 col-6 mb-3">
                <a href="#">
                    <div class="feature-box">
                        <img src="{{ asset('IMG/Mingguan.jpg') }}" alt="Aktivitas Mingguan Image" class="feature-img mb-3" style="max-width: 75%; max-height: 200px;">
                        <h3>Aktivitas Mingguan</h3>
                        <p>Deskripsi singkat tentang fitur ini...</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 mb-3">
                <a href="#">
                    <div class="feature-box">
                        <img src="{{ asset('IMG/Pembinaan.jpg') }}" alt="Aktivitas Pembinaan Image" class="feature-img mb-3" style="max-width: 75%; max-height: 200px;">
                        <h3>Aktivitas Pembinaan</h3>
                        <p>Deskripsi singkat tentang fitur ini...</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 mb-3">
                <a href="#">
                    <div class="feature-box">
                        <img src="{{ asset('IMG/Tahfidzh.jpg') }}" alt="Kegiatan Tahfidz Image" class="feature-img mb-3" style="max-width: 55%; max-height: 200px;">
                        <h3>Kegiatan Tahfidz</h3>
                        <p>Deskripsi singkat tentang fitur ini...</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 mb-3">
                <a href="#">
                    <div class="feature-box">
                        <img src="{{ asset('IMG/Izin.jpg') }}" alt="Perizinan Pulang Image" class="feature-img mb-3" style="max-width: 75%; max-weight: 100px;">
                        <h3>Perizinan Pulang</h3>
                        <p>Deskripsi singkat tentang fitur ini...</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 mb-3">
                <a href="#">
                    <div class="feature-box">
                        <img src="url_to_image_5" alt="Piket Image" class="feature-img mb-3">
                        <h3>Piket</h3>
                        <p>Deskripsi singkat tentang fitur ini...</p>
                    </div>
                </a>
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



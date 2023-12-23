@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Tambah Kegiatan Tahfizh Baru</h2>
        <form action="{{ route('kegiatan_tahfizhs.store') }}" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group mt-3">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" required></textarea>
            </div>
            <div class="form-group mt-3">
                <label for="jumlah">Jumlah Halaman:</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection

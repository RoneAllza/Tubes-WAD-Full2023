@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Edit Kegiatan Tahfizh</h2>
        <form action="{{ route('kegiatan_tahfizhs.update', $kegiatanTahfizh->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="{{ $kegiatanTahfizh->nama }}" required>
            </div>
            <div class="form-group mt-3">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" required>{{ $kegiatanTahfizh->deskripsi }}</textarea>
            </div>
            <div class="form-group mt-3">
                <label for="jumlah">Jumlah Halaman:</label>
                <input type="number" class="form-control" name="jumlah" value="{{ $kegiatanTahfizh->jumlah }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
        </form>
    </div>
@endsection

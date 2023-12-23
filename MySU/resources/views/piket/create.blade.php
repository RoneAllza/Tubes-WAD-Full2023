@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Kegiatan Tahfizh Baru</h2>
        <form action="{{ route('piket.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Hari:</label>
                <textarea class="form-control" name="hari" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

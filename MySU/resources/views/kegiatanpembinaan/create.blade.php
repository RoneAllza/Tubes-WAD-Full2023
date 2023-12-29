@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Tambah Aktivitas Pembinaan Baru</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('kegiatanpembinaan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pembina">Nama Pembina:</label>
                        <input type="text" class="form-control" name="nama_pembina" required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul:</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="konten_pembinaan">Konten Pembinaan:</label>
                        <textarea class="form-control" name="konten_pembinaan" rows="6" required></textarea>
                        <small class="form-text text-muted">Tekan tomboh dibawah ini untuk menyimpan</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection


<!--Memasukkan Konten ke List-->
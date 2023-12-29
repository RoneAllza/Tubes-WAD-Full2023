@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Aktivitas Pembinaan</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('kegiatanpembinaan.update', $Aktvitasz->first()->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_pembina">Nama Pembina:</label>
                        <input type="text" class="form-control" name="nama_pembina" value="{{ $Aktvitasz->first()->nama_pembina }}" required>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul:</label>
                        <input type="text" class="form-control" name="judul" value="{{ $Aktvitasz->first()->judul }}" required>
                    </div>
                    <div class="form-group">
                        <label for="konten_pembinaan">Konten Pembinaan:</label>
                        <textarea class="form-control" name="konten_pembinaan" rows="6" required>{{ $Aktvitasz->first()->konten_pembinaan }}</textarea>
                        <small class="form-text text-muted">Masukkan konten pembinaan di sini.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
@endsection


<!--Update salah satu dari konten list-->
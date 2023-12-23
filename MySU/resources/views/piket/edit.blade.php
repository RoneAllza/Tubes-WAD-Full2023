@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Kegiatan Tahfizh</h2>
        <form action="{{ route('piket.update', $Piket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="{{ $Piket->nama }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" required>{{ $Piket->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" name="jumlah" value="{{ $Piket->jumlah }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection

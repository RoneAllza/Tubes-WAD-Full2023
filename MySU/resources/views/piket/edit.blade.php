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
                <label for="deskripsi">Hari:</label>
                <textarea class="form-control" name="hari" required>{{ $Piket->hari }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection

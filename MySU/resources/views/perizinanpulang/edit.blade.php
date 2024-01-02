
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Edit Perizinan Pulang</h2>
        <form action="{{ route('perizinanpulangs.update', $PerizinanPulang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="nama">nama:</label>
                <input type="text" class="form-control" name="nama" value="{{ $PerizinanPulang->nama }}" required>
            </div>
            <div class="form-group mt-3">
                <label for="alasan">alasan:</label>
                <textarea class="form-control" name="alasan" required>{{ $PerizinanPulang->alasan }}</textarea>
            </div>
            <div class="form-group mt-3">
                <label for="alamat">alamat:</label>
                <input type="text" class="form-control" name="alamat" value="{{ $PerizinanPulang->alamat }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
        </form>
    </div>
@endsection


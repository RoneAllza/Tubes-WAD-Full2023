@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Permohonan Perizinan Pulang </h2>
            </div>
            <div class="card-body">
                <form action="{{ route('perizinanpulangs.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alasan">Alasan Pulang:</label>
                        <textarea class="form-control" name="alasan" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat:</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajukan Izin Pulang</button>
                </form>
            </div>
        </div>
    </div>
@endsection 
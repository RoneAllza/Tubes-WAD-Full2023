@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Edit User</h2>
        <form action="{{ route('user_management.update', $userManagement->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="{{ $userManagement->nama }}" required>
            </div>
            <div class="form-group mt-3">
                <label for="deskripsi">Email address:</label>
                <textarea class="form-control" name="email" required>{{ $userManagement->deskripsi }}</textarea>
            </div>
            <div class="form-group mt-3">
                <label for="jumlah">PASSWORD_DEFAULT:</label>
                <input type="number" class="form-control" name="password" value="{{ $userManagement->jumlah }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
        </form>
    </div>
@endsection

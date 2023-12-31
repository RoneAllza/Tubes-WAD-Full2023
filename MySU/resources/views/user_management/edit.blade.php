@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Edit User</h2>
        <form action="{{ route('user_management.update', $userManagement->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="{{ $userManagement->name }}" disabled>
            </div>
            <div class="form-group mt-3">
                <label for="deskripsi">Email address:</label>
                <input type="email" class="form-control" name="email" value="{{ $userManagement->email }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Daftar User</h2>
        <a href="{{ route('register') }}" class="btn btn-success mt-3">Tambah User</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userManagement as $userManagement)
                    <tr>
                        <td>{{ $userManagement->id }}</td>
                        <td>{{ $userManagement->name }}</td>
                        <td>{{ $userManagement->email }}</td>
                        <td>
                            <a href="{{ route('user_management.edit', $userManagement->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('user_management.destroy', $userManagement->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

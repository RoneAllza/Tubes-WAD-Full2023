@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Piket</h2>
        <a href="{{ route('piket.create') }}" class="btn btn-success">Tambah Jadwal</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Hari</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($piket as $Pikets)
                    <tr>
                        <td>{{ $Pikets->id }}</td>
                        <td>{{ $Pikets->nama }}</td>
                        <td>{{ $Pikets->hari }}</td>
                        <td>
                            <a href="{{ route('piket.edit', $Pikets->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('piket.destroy', $Pikets->id) }}" method="POST" style="display: inline-block;">
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

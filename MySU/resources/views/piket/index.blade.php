@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Kegiatan Tahfizh</h2>
        <a href="{{ route('piket.create') }}" class="btn btn-success">Tambah Kegiatan</a>
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
                @foreach($Pikets as $Piket)
                    <tr>
                        <td>{{ $Piket->id }}</td>
                        <td>{{ $Piket->nama }}</td>
                        <td>{{ $Piket->hari }}</td>
                        <td>
                            <a href="{{ route('piket.edit', $Piket->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('piket.destroy', $Piket->id) }}" method="POST" style="display: inline-block;">
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

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Daftar Kegiatan Tahfizh</h2>
        <a href="{{ route('kegiatan_tahfizhs.create') }}" class="btn btn-success mt-3">Tambah Kegiatan</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kegiatanTahfizhs as $kegiatanTahfizh)
                    <tr>
                        <td>{{ $kegiatanTahfizh->id }}</td>
                        <td>{{ $kegiatanTahfizh->nama }}</td>
                        <td>{{ $kegiatanTahfizh->deskripsi }}</td>
                        <td>{{ $kegiatanTahfizh->jumlah }}</td>
                        <td>
                            <a href="{{ route('kegiatan_tahfizhs.edit', $kegiatanTahfizh->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kegiatan_tahfizhs.destroy', $kegiatanTahfizh->id) }}" method="POST" style="display: inline-block;">
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

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Daftar Perizinan Pulang</h2>
        <a href="{{ route('perizinanpulangs.create') }}" class="btn btn-success mt-3">Tambah Perizinan</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nama</th>
                    <th>alasan</th>
                    <th>alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($PerizinanPulangs as $PerizinanPulang)
                    <tr>
                        <td>{{ $PerizinanPulang->id }}</td>
                        <td>{{ $PerizinanPulang->nama }}</td>
                        <td>{{ $PerizinanPulang->alasan }}</td>
                        <td>{{ $PerizinanPulang->alamat }}</td>
                        <td>
                            <a href="{{ route('perizinanpulangs.edit', $PerizinanPulang->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('perizinanpulangs.destroy', $PerizinanPulang->id) }}" method="POST" style="display: inline-block;">
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

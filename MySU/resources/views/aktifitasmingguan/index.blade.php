@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Aktivitas Mingguan</h2>
        <a href="{{ route('aktifitasmingguan.create') }}" class="btn btn-success">Tambah Kegiatan</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Tilawah</th>
                    <th>Murajaah</th>
                    <th>Puasa Sunah</th>
                    <th>Sholat Tahajud</th>
                    <th>Sholat Dhuha</th>
                    <th>Infaq</th>
                    <th>Wirid</th>
                    <th>Olahraga</th>
                    <th>Telp org tua</th>
                    <th>Hafalan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kegiatanMingguans as $kegiatanMingguan)
                    <tr>
                        <td>{{ $kegiatanMingguan->tilawah }}</td>
                        <td>{{ $kegiatanMingguan->murajaah }}</td>
                        <td>{{ $kegiatanMingguan->puasa }}</td>
                        <td>{{ $kegiatanMingguan->tahajud }}</td>
                        <td>{{ $kegiatanMingguan->dhuha }}</td>
                        <td>{{ $kegiatanMingguan->infaq }}</td>
                        <td>{{ $kegiatanMingguan->wirid }}</td>
                        <td>{{ $kegiatanMingguan->olahraga }}</td>
                        <td>{{ $kegiatanMingguan->telp }}</td>
                        <td>{{ $kegiatanMingguan->hafalan }}</td>
                        <td>
                            <a href="{{ route('aktifitasmingguan.edit', $kegiatanMingguan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('aktifitasmingguan.destroy', $kegiatanMingguan->id) }}" method="POST" style="display: inline-block;">
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

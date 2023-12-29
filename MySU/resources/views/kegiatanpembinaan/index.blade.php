@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Aktivitas Pembinaaan</h2>
        <a href="{{ route('kegiatanpembinaan.create') }}" class="btn btn-success">Tambah Aktivitas Pembinaan</a>
        <table class="table mt-3">
            <thead>
                <tr>
					<th>ID</th>
                    <th>Nama Pembina</th>
                    <th>Judul Pembinaan</th>
                    <th>Konten Pembinaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($aktivitas as $Aktvitasz)
                    <tr>
						<td>{{ $Aktvitasz->id }}</td>
                        <td>{{ $Aktvitasz->nama_pembina }}</td>
                        <td>{{ $Aktvitasz->judul }}</td>
                        <td>{{ strlen($Aktvitasz->konten_pembinaan) > 30 ? substr($Aktvitasz->konten_pembinaan, 0, 30) . '...' : $Aktvitasz->konten_pembinaan }}</td>
                        <td>
                            <a href="{{ route('kegiatanpembinaan.edit', $Aktvitasz->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kegiatanpembinaan.destroy', $Aktvitasz->id) }}" method="POST" style="display: inline-block;">
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


<!--Menampilkan List konten fitur dan delete--> 
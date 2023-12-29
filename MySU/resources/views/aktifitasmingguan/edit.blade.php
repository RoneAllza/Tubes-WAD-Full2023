@extends('layouts.app')

@section('content')
    <div class="container">
            <h2>Edit Aktivitas Mingguan</h2>
            <form action="{{ route('aktifitasmingguan.update', $kegiatanMingguan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tilawah">Catat Aktivitas Tilawah:</label>
                    <input type="number" class="form-control" name="tilawah" placeholder="Berapa halaman" value="{{ $kegiatanMingguan->tilawah }}" required>
                </div>
                <div class="form-group">
                    <label for="murajaah">Catat Aktivitas Murajaah:</label>
                    <input type="number" class="form-control" name="murajaah" placeholder="Berapa halaman" value="{{ $kegiatanMingguan->murajaah }}" required>
                </div>
                <div class="form-group">
                    <label for="puasa">Catat Aktivitas Puasa Sunah:</label>
                    <input type="number" class="form-control" name="puasa" placeholder="Berapa kali" value="{{ $kegiatanMingguan->puasa }}" required>
                </div>
                <div class="form-group">
                    <label for="tahajud">Catat Aktivitas Sholat Tahajud:</label>
                    <input type="number" class="form-control" name="tahajud" placeholder="Berapa kali" value="{{ $kegiatanMingguan->tahajud }}" required>
                </div>
                <div class="form-group">
                    <label for="dhuha">Catat Aktivitas Sholat Dhuha:</label>
                    <input type="number" class="form-control" name="dhuha" placeholder="Berapa kali" value="{{ $kegiatanMingguan->dhuha }}" required>
                </div>
                <div class="form-group">
                    <label for="infaq">Catat Aktivitas Infaq:</label>
                    <input type="number" class="form-control" name="infaq" placeholder="Berapa kali" value="{{ $kegiatanMingguan->infaq }}" required>
                </div>
                <div class="form-group">
                    <label for="wirid">Catat Aktivitas wirid pagi dan petang:</label>
                    <input type="number" class="form-control" name="wirid" placeholder="Berapa kali" value="{{ $kegiatanMingguan->wirid }}" required>
                </div>
                <div class="form-group">
                    <label for="olahraga">Catat Aktivitas Olahraga:</label>
                    <input type="number" class="form-control" name="olahraga" placeholder="Berapa kali" value="{{ $kegiatanMingguan->olahraga }}" required>
                </div>
                <div class="form-group">
                    <label for="telp">Catat Aktivitas Telpon Orang Tua:</label>
                    <input type="number" class="form-control" name="telp" placeholder="Berapa kali" value="{{ $kegiatanMingguan->telp }}" required>
                </div>
                <div class="form-group">
                    <label for="hafalan">Catat Aktivitas Setor Hafalan:</label>
                    <input type="number" class="form-control" name="hafalan" placeholder="Berapa ayat" value="{{ $kegiatanMingguan->hafalan }}" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </form>
        </div>
@endsection
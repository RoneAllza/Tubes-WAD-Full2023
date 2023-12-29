<?php

namespace App\Http\Controllers;

use App\Models\AktivitasPembinaan;
use Illuminate\Http\Request;

class AktivitasPembinaanController extends Controller
{
    public function index()
    {
        $aktivitas = AktivitasPembinaan::all();
        return view('kegiatanpembinaan.index', compact('aktivitas'));
    }

    public function create()
    {
        return view('kegiatanpembinaan.create');
    }

    public function store(Request $request)
  {
      // Validasi input
      $request->validate([
          'nama_pembina' => 'required',
          'judul' => 'required',
          'konten_pembinaan' => 'required',
          // Anda bisa menambahkan validasi lainnya sesuai kebutuhan
      ]);

      // Ambil hanya sebagian dari konten_pembinaan sebagai preview
      $kontenPreview = substr($request->input('konten_pembinaan'), 0, 100); // Ubah 100 sesuai dengan panjang preview yang diinginkan

      // Simpan data ke database (asumsi model AktivitasPembinaan digunakan)
      AktivitasPembinaan::create([
          'nama_pembina' => $request->input('nama_pembina'),
          'judul' => $request->input('judul'),
          'konten_pembinaan' => $request->input('konten_pembinaan'),
          // Anda dapat menambahkan field lainnya sesuai kebutuhan
      ]);

      return redirect()->route('kegiatanpembinaan.index')->with('success', 'Data berhasil disimpan!');
  }


    /**
     * Display the specified resource.
     */
    public function show(AktivitasPembinaan $aktivitasPembinaan)

    {
        $request->validate([
            'nama_pembina' => 'required',
            'judul' => 'required',
            'konten_pembinaan' => 'required',
        ]);

        AktivitasPembinaan::create($request->all());
        return redirect()->route('kegiatanpembinaan.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Aktvitasz = AktivitasPembinaan::findOrFail($id);
        return view('kegiatanpembinaan.edit', compact('Aktvitasz'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pembina' => 'required',
            'judul' => 'required',
            'konten_pembinaan' => 'required',
        ]);

    // Temukan data yang akan diubah dan update (asumsi model AktivitasPembinaan digunakan)
    $aktivitas = AktivitasPembinaan::findOrFail($id);
    $aktivitas->update([
        'nama_pembina' => $request->input('nama_pembina'),
        'judul' => $request->input('judul'),
        'konten_pembinaan' => $request->input('konten_pembinaan'),
        // tambahkan field lainnya sesuai kebutuhan
    ]);

        return redirect()->route('kegiatanpembinaan.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $AktivitasPembinaan = AktivitasPembinaan::findOrFail($id);
        $AktivitasPembinaan->delete();

        return redirect()->route('kegiatanpembinaan.index')->with('success', 'Data berhasil dihapus!');
    }
}

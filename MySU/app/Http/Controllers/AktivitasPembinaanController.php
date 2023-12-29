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
        $request->validate([
            'nama_pembina' => 'required',
            'judul' => 'required',
            'konten_pembinaan' => 'required',
        ]);

        AktivitasPembinaan::create($request->all());
        return redirect()->route('kegiatanpembinaan.index')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $Aktivitasz = AktivitasPembinaan::findOrFail($id);
        return view('kegiatanpembinaan.edit', compact('Aktivitasz'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pembina' => 'required',
            'judul' => 'required',
            'konten_pembinaan' => 'required',
        ]);

        $AktivitasPembinaan = AktivitasPembinaan::findOrFail($id);
        $AktivitasPembinaan->update($request->all());

        return redirect()->route('kegiatanpembinaan.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $AktivitasPembinaan = AktivitasPembinaan::findOrFail($id);
        $AktivitasPembinaan->delete();

        return redirect()->route('kegiatanpembinaan.index')->with('success', 'Data berhasil dihapus!');
    }
}

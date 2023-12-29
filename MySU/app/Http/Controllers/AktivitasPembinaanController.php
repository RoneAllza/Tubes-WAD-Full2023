<?php

namespace App\Http\Controllers;

use App\Models\AktivitasPembinaan;
use Illuminate\Http\Request;

class AktivitasPembinaanController extends Controller
{
    public function index()
    {
        $AktivitasPembinaan = AktivitasPembinaan::all();
        return view('AktivitasPembinaan.index', compact('AktivitasPembinaan'));
    }

    public function create()
    {
        return view('AktivitasPembinaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        AktivitasPembinaan::create($request->all());
        return redirect()->route('AktivitasPembinaan.index')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $AktivitasPembinaan = AktivitasPembinaan::findOrFail($id);
        return view('AktivitasPembinaan.edit', compact('AktivitasPembinaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $AktivitasPembinaan = AktivitasPembinaan::findOrFail($id);
        $AktivitasPembinaan->update($request->all());

        return redirect()->route('AktivitasPembinaan.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $AktivitasPembinaan = AktivitasPembinaan::findOrFail($id);
        $AktivitasPembinaan->delete();

        return redirect()->route('AktivitasPembinaan.index')->with('success', 'Data berhasil dihapus!');
    }
}

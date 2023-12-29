<?php

namespace App\Http\Controllers;

use App\Models\KegiatanTahfizh;
use Illuminate\Http\Request;

class KegiatanTahfizhController extends Controller
{
    public function index()
    {
        $kegiatanTahfizhs = KegiatanTahfizh::all();
        return view('kegiatan_tahfizh.index', compact('kegiatanTahfizhs'));
    }

    public function create()
    {
        return view('kegiatan_tahfizh.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        KegiatanTahfizh::create($request->all());
        return redirect()->route('kegiatan_tahfizhs.index')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $kegiatanTahfizh = KegiatanTahfizh::findOrFail($id);
        return view('kegiatan_tahfizh.edit', compact('kegiatanTahfizh'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $kegiatanTahfizh = KegiatanTahfizh::findOrFail($id);
        $kegiatanTahfizh->update($request->all());

        return redirect()->route('kegiatan_tahfizhs.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kegiatanTahfizh = KegiatanTahfizh::findOrFail($id);
        $kegiatanTahfizh->delete();

        return redirect()->route('kegiatan_tahfizhs.index')->with('success', 'Data berhasil dihapus!');
    }
}

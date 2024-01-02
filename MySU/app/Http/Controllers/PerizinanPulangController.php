<?php

namespace App\Http\Controllers;

use App\Models\PerizinanPulang;
use Illuminate\Http\Request;

class PerizinanPulangController extends Controller
{

    public function index()
    {
        $PerizinanPulangs = PerizinanPulang::all();
        return view('perizinanpulang.index', compact('PerizinanPulangs'));
    }

    public function create()
    {
        return view('perizinanpulang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alasan' => 'required',
            'alamat'=> 'required', 
            // 'jam_pulang'=> 'required',
        ]);

        PerizinanPulang::create($request->all());
        return redirect()->route('perizinanpulangs.index')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $PerizinanPulang = PerizinanPulang::findOrFail($id);
        return view('perizinanpulang.edit', compact('PerizinanPulang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alasan' => 'required',
            'alamat'=> 'required',
        ]);

        $PerizinanPulang = PerizinanPulang::findOrFail($id);
        $PerizinanPulang->update($request->all());

        return redirect()->route('perizinanpulangs.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        
        $PerizinanPulang = PerizinanPulang::findOrFail($id);
        $PerizinanPulang->delete();

        return redirect()->route('PerizinanPulang.index')->with('success', 'Data berhasil terhapus!');
    }
}

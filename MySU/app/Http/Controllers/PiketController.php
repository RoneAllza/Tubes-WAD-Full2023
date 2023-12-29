<?php

namespace App\Http\Controllers;

use App\Models\Piket;
use Illuminate\Http\Request;

class PiketController extends Controller
{
    public function index()
    {
        $piket = Piket::all();
        return view('piket.index', compact('piket'));
    }

    public function create()
    {
        return view('piket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'hari' => 'required',
        ]);

        Piket::create($request->all());
        return redirect()->route('piket.index')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $Piket = Piket::findOrFail($id);
        return view('piket.edit', compact('Piket'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'hari' => 'required',
        ]);

        $Piket = Piket::findOrFail($id);
        $Piket->update($request->all());

        return redirect()->route('piket.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $Piket = Piket::findOrFail($id);
        $Piket->delete();

        return redirect()->route('piket.index')->with('success', 'Data berhasil dihapus!');
    }
}

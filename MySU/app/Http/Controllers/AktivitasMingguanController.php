<?php

namespace App\Http\Controllers;

use App\Models\AktivitasMingguan;
use Illuminate\Http\Request;

class AktivitasMingguanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatanMingguans = AktivitasMingguan::all();
        return view('aktifitasmingguan.index', compact('kegiatanMingguans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aktifitasmingguan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tilawah' => 'required',
            'murajaah' => 'required',
            'puasa' => 'required',
            'tahajud' => 'required',
            'dhuha' => 'required',
            'infaq' => 'required',
            'wirid' => 'required',
            'olahraga' => 'required',
            'telp' => 'required',
            'hafalan' => 'required',

        ]);

        AktivitasMingguan::create($request->all());
        return redirect()->route('aktifitasmingguan.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AktivitasMingguan $aktivitasMingguan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kegiatanMingguan = AktivitasMingguan::findOrFail($id);
        return view('aktifitasmingguan.edit', compact('kegiatanMingguan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tilawah' => 'required',
            'murajaah' => 'required',
            'puasa' => 'required',
            'tahajud' => 'required',
            'dhuha' => 'required',
            'infaq' => 'required',
            'wirid' => 'required',
            'olahraga' => 'required',
            'telp' => 'required',
            'hafalan' => 'required',
        ]);

        $kegiatanMingguan = AktivitasMingguan::findOrFail($id);
        $kegiatanMingguan->update($request->all());

        return redirect()->route('aktifitasmingguan.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kegiatanMingguan = AktivitasMingguan::findOrFail($id);
        $kegiatanMingguan->delete();

        return redirect()->route('aktifitasmingguan.index')->with('success', 'Data berhasil dihapus!');
    }
}

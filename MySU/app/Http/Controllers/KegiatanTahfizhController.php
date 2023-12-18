<?php

namespace App\Http\Controllers;

use App\Models\KegiatanTahfizh;
use Illuminate\Http\Request;

class KegiatanTahfizhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kegiatantahfiz.indextahfiz');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kegiatantahfiz.createtahfiz');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "anjay";
    }

    /**
     * Display the specified resource.
     */
    public function show(KegiatanTahfizh $kegiatanTahfizh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KegiatanTahfizh $kegiatanTahfizh)
    {
        return view('kegiatantahfiz.edittahfiz');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KegiatanTahfizh $kegiatanTahfizh)
    {
        echo "anjay";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KegiatanTahfizh $kegiatanTahfizh)
    {
        echo "anjay";
        $kegiatantahfizh = KegiatanTahfizh::all();
        return view('kegiatantahfiz.indextahfiz', compact('kegiatantahfiz'));
    }
}

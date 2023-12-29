<?php

namespace App\Http\Controllers;

use App\Models\PerizinanPulang;
use Illuminate\Http\Request;

class PerizinanPulangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('perizinanpulang.indexPulang');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perizinanpulang.createPulang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(PerizinanPulang $perizinanPulang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerizinanPulang $perizinanPulang)
    {
        return view('perizinanpulang.editPulang');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PerizinanPulang $perizinanPulang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerizinanPulang $perizinanPulang)
    {
        //
    }
}

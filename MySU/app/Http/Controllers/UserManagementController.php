<?php

namespace App\Http\Controllers;

use App\Models\UserManagement;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $userManagement = UserManagement::all();
        return view('user_management.index', compact('usermanagement'));
    }

    public function create()
    {
        return view('usermanagement.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        UserManagement::create($request->all());
        return redirect()->route('user_management.index')->with('success', 'User Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $userManagement = UserManagement::findOrFail($id);
        return view('user_management.edit', compact('userManagement'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $userManagement = UserManagement::findOrFail($id);
        $userManagement->update($request->all());

        return redirect()->route('user_management.index')->with('success', 'User berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $userManagement = UserManagement::findOrFail($id);
        $userManagement->delete();

        return redirect()->route('user_management.index')->with('success', 'User berhasil dihapus!');
    }
}

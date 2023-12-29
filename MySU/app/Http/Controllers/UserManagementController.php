<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $userManagement = User::all();
        return view('user_management.index', compact('userManagement'));
    }

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('user_management.index')->with('success', 'User Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $userManagement = User::findOrFail($id);
        return view('user_management.edit', compact('userManagement'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $userManagement = User::findOrFail($id);
        $userManagement->update($request->all());

        return redirect()->route('user_management.index')->with('success', 'User berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $userManagement = User::findOrFail($id);
        $userManagement->delete();

        return redirect()->route('user_management.index')->with('success', 'User berhasil dihapus!');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        /*if (auth()->check() && auth()->user()->roles === 'dosen') {
            return view('user.index_dosen', ['users' => $users]); 
        } else {
            return view('user.index_mahasiswa', ['users' => $users]);
        }*/
        // Menunggu Autentication dari Raihan
        // Jika pada saat menginputkan Dosen maka akan muncul view Index Dosen
        // Dan jika pada saat menginputkan Mahasiswa maka akan muncul view Index Mahasiswa
    }

    public function create(Request $request)
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'roles' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function show(User $user)
    {
        if ($user->roles === 'dosen') {
            return view('user.show_dosen', ['user' => $user]);
        } else {
            return view('user.show_mahasiswa', ['user' => $user]);
        }
    }

    public function edit(User $user)
    {
        if ($user->roles === 'dosen') {
            return view('user.edit_dosen', ['user' => $user]);
        } else {
            return view('user.edit_mahasiswa', ['user' => $user]);
        }
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'roles' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
        ]);

        $user->update($request->all());

        return redirect()->route('user.index')->with('success', 'Data User berhasil diperbarui!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
    }
}
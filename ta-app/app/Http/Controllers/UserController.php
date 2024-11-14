<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller 
{
    public function index()
        {
            $mahasiswa = User::all();
            return view('mahasiswa.index', compact('mahasiswa'));
        }

        public function create(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'roles' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255',
                'password' => 'required|string|min:8',
            ]);
            return view('mahasiswa.create');
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

            return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
        }

        public function show(User $mahasiswa)
        {
            return view('mahasiswa.show', compact('mahasiswa'));
        }

        public function edit(User $mahasiswa)
        {
            return view('mahasiswa.edit', compact('mahasiswa'));
        }

        public function update(Request $request, User $mahasiswa)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $mahasiswa->id,
                'roles' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255', // Validasi untuk jurusan
            ]);

            $mahasiswa->update($request->all());

            return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
        }

        public function destroy(User $mahasiswa)
        {
            $mahasiswa->delete();

            return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus!');
        }
}


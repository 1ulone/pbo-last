<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    //Function to fetch all records
    public function readAll()
    {
        $bimbingan = Bimbingan::all();
        return view('contoh', compact('contoh'));
    }

    // Fungsi untuk menampilkan kolom jadwal_bimbingan berdasarkan id
    public function readOne($id)
    {
        // Mengambil hanya kolom jadwal_bimbingan berdasarkan id
        $bimbingan = Bimbingan::select('jadwal_bimbingan')
                    ->where('id', $id)
                    ->first();

        // Memeriksa apakah data ditemukan
        if ($bimbingan) {
            return response()->json([
                'success' => true,
                'message' => 'Data found',
                'jadwal_bimbingan' => $bimbingan->jadwal_bimbingan,
            ], 200);
        }

        // Mengembalikan response jika data tidak ditemukan
        return response()->json([
            'success' => false,
            'message' => 'Data not found'
        ], 404);
    }

    // 3. Function to create a new record (only `jadwal_bimbingan`)
    public function create(Request $request)
    {
        // Validasi input
        $request->validate([
            'pembimbing_id' => 'required|integer',
            'mahasiswa_id' => 'required|integer',
            'jadwal_bimbingan' => 'required|date',
        ]);

        // Membuat data bimbingan baru
        $bimbingan = Bimbingan::create([
            'pembimbing_id' => $request->pembimbing_id,
            'mahasiswa_id' => $request->mahasiswa_id,
            'jadwal_bimbingan' => $request->jadwal_bimbingan,
        ]);

        // Mengembalikan response
        if ($bimbingan) {
            return response()->json([
                'success' => true,
                'message' => 'bimbingan created successfully',
                'data' => $bimbingan
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Failed to create bimbingan'
        ], 500);
    }

    public function contoh()
{
    return view('contoh');
}

}

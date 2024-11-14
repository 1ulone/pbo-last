<?php

namespace App\Http\Controllers;

use App\Models\Sidang;
use Illuminate\Http\Request;

class SidangController extends Controller
{
    //Function to fetch all records
    public function readAll()
    {
        $sisang = Sidang::all();
        return view('contoh', compact('contoh'));
    }

    // Fungsi untuk menampilkan kolom jadwal_bimbingan berdasarkan id
    public function readOne($id)
    {
        // Mengambil hanya kolom jadwal_bimbingan berdasarkan id
        $sidang = Sidang::select('jadwal_bimbingan')
                    ->where('id', $id)
                    ->first();

        // Memeriksa apakah data ditemukan
        if ($sidang) {
            return response()->json([
                'success' => true,
                'message' => 'Data found',
                'jadwal_bimbingan' => $sidang->jadwal_bimbingan,
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
            'penguji_id' => 'required|integer',
            'mahasiswa_id' => 'required|integer',
            'jadwal_bimbingan' => 'required|date',
        ]);

        // Membuat data seminar baru
        $sidang = Sidang::create([
            'penguji_id' => $request->penguji_id,
            'mahasiswa_id' => $request->mahasiswa_id,
            'jadwal_bimbingan' => $request->jadwal_bimbingan,
        ]);

        // Mengembalikan response
        if ($sidang) {
            return response()->json([
                'success' => true,
                'message' => 'Sidang created successfully',
                'data' => $sidang
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Failed to create sidang'
        ], 500);
    }

    public function contoh()
{
    return view('contoh');
}

}

<?php
namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    //Function to fetch all records
    public function readAll()
    {
        $seminars = Seminar::all();
        return view('contoh', compact('contoh'));
    }

    // Fungsi untuk menampilkan kolom jadwal_bimbingan berdasarkan id
    public function readOne($id)
    {
        // Mengambil hanya kolom jadwal_bimbingan berdasarkan id
        $seminar = Seminar::select('jadwal_bimbingan')
                    ->where('id', $id)
                    ->first();

        // Memeriksa apakah data ditemukan
        if ($seminar) {
            return response()->json([
                'success' => true,
                'message' => 'Data found',
                'jadwal_bimbingan' => $seminar->jadwal_bimbingan,
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
            'penguji_id' => 'required|integer',
            'mahasiswa_id' => 'required|integer',
            'jadwal_bimbingan' => 'required|date',
        ]);

        // Membuat data seminar baru
        $seminar = Seminar::create([
            'pembimbing_id' => $request->pembimbing_id,
            'penguji_id' => $request->penguji_id,
            'mahasiswa_id' => $request->mahasiswa_id,
            'jadwal_bimbingan' => $request->jadwal_bimbingan,
        ]);

        // Mengembalikan response
        if ($seminar) {
            return response()->json([
                'success' => true,
                'message' => 'Seminar created successfully',
                'data' => $seminar
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Failed to create seminar'
        ], 500);
    }

    public function contoh()
{
    return view('contoh');
}

}

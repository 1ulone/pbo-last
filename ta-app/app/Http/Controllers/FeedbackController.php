<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //Function to fetch all records
    public function readAll()
    {
        $feedback = Feedback::all();
        return view('contoh', compact('contoh'));
    }

    // Fungsi untuk menampilkan kolom jadwal_bimbingan berdasarkan id
    public function readOne($id)
    {
        // Mengambil hanya kolom jadwal_bimbingan berdasarkan id
        $feedback = Feedback::select('detail')
                    ->where('id', $id)
                    ->first();

        // Memeriksa apakah data ditemukan
        if ($feedback) {
            return response()->json([
                'success' => true,
                'message' => 'Data found',
                'detail' => $feedback->detail,
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
            'mahasiswa_id' => 'required|integer',
            'bimbingan_id' => 'required|integer',
            'seminar_id' => 'required|integer',
            'sidang_id' => 'required|integer',
            'detail' => 'required|string'
        ]);

        // Membuat data seminar baru
        $feedback = Feedback::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'bimbingan_id' => $request->bimbingan_id,
            'seminar_id' => $request->seminar_id,
            'sidang_id' => $request->sidang_id,
            'detail' => $request->detail
        ]);

        // Mengembalikan response
        if ($feedback) {
            return response()->json([
                'success' => true,
                'message' => 'feedback created successfully',
                'data' => $feedback
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'Failed to create feedback'
        ], 500);
    }

    public function contoh()
{
    return view('contoh');
}

}
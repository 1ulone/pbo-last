<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan Anda sudah memiliki view `auth/login.blade.php`
    }
    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Autentikasi pengguna
        $user = $this->auth->authenticate($request->email, $request->password);

        if ($user) {
            // Jika autentikasi berhasil, simpan data pengguna dalam session
            Session::put('user_id', $user->id);
            Session::put('username', $user->name);
            Session::put('role', $user->role);

            return redirect()->route('dashboard');
        } else {
            // Jika login gagal
            return back()->withErrors([
                'username' => 'Login failed. Invalid username or password.',
            ])->withInput($request->only('username'));
        }
    }

    // Fungsi logout
    public function logout()
    {
        // Hapus data session
        Session::forget(['user_id', 'username', 'role']);

        return redirect()->route('login');
    }
}

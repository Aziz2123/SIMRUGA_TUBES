<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authentication(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Ambil nilai input dari form
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        // Coba melakukan otentikasi
        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, redirect ke halaman yang dituju
            $request->session()->regenerate();
            return redirect()->intended('/bendahara');
        }

        // Jika otentikasi gagal, kembali ke halaman login dengan pesan error
        return back()->with('loginError', 'Login Failed');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Lowongan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login'); // pastikan Anda membuat view login.blade.php di folder resources/views/auth
    }

    // Meng-handle login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Melakukan login
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->remember)) {
            // Redirect ke halaman home setelah login berhasil
            return redirect()->route('dashboard');
        }

        // Jika login gagal, kembalikan ke form login dengan pesan error
        return redirect()->route('login')->withErrors(['login' => 'Invalid credentials']);
    }

    public function home()
    {
        $produk = Produk::all();
        $lowongan = Lowongan::latest()->take(5)->get();
        $berita = Berita::latest()->take(6)->get();

        return view('home', compact('produk', 'lowongan', 'berita'));
    }
    
    public function dashboard()
    {

        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

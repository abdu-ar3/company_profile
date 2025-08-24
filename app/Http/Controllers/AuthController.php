<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Lamaran;
use App\Models\Lowongan;
use App\Models\Produk;
use App\Models\ProfilPerusahaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $profils = ProfilPerusahaan::all()->groupBy('jenis');
        $sections = [
            'sejarah' => ['label' => 'Sejarah', 'icon' => 'hourglass-split'],
            'visi'    => ['label' => 'Visi',    'icon' => 'eye'],
            'misi'    => ['label' => 'Misi',    'icon' => 'list-check'],
        ];

        return view('home', compact('produk', 'lowongan', 'berita', 'profils', 'sections'));
    }
    
    public function dashboard()
    {

        $jumlahProduk = Produk::count();
        $jumlahLowongan = Lowongan::count();
        $jumlahLamaran = Lamaran::count();
        $jumlahBerita = Berita::count();

        return view('admin.dashboard', compact(
            'jumlahProduk', 'jumlahLowongan', 'jumlahLamaran', 'jumlahBerita'
        ));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

        public function register(Request $request)
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // pastikan ada password_confirmation
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Enkripsi password
        ]);

          // Tambahkan role_id = 3 ke tabel role_user
        DB::table('role_user')->insert([
            'role_id' => 1, // asumsi 3 adalah id untuk role 'Customer' atau setara
            'user_id' => $user->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Login otomatis setelah register
        Auth::login($user);

        return redirect()->route('dashboard');
    }
}

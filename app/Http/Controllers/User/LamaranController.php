<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Lamaran;
use Illuminate\Http\Request;

class LamaranController extends Controller
{
    public function create()
    {
        $lowongans = \App\Models\Lowongan::all();
        return view('lamaran', compact('lowongans'));
    }

    // Menyimpan data lamaran
    public function store(Request $request)
    {
        // Validasi form
        $request->validate([
            'nama_pelamar' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'file_cv' => 'required|mimes:pdf,doc,docx|max:2048',
            'posisi_dilamar' => 'required|string|max:255',
        ]);

        // Menyimpan data lamaran
        Lamaran::create([
            'nama_pelamar' => $request->nama_pelamar,
            'email' => $request->email,
            'file_cv' => $request->file('file_cv')->store('public/cv_files'),
            'posisi_dilamar' => $request->posisi_dilamar,
            'tanggal_lamar' => now(),
        ]);

        // Mengarahkan pengguna kembali dengan pesan sukses
        return redirect()->route('lamaran.store')->with('success', 'Lamaran berhasil dikirim.');
    }
}


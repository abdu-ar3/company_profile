<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lamaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LamaranController extends Controller
{
     public function index()
    {
        $lamarans = Lamaran::with('lowongan')->latest()->get();
        return view('admin.lamaran.index', compact('lamarans'));
    }

    public function create()
    {
        $lowongans = \App\Models\Lowongan::all();
        return view('admin.lamaran.create', compact('lowongans'));
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'nama_pelamar' => 'required',
            'email' => 'required|email',
            'file_cv' => 'required|file|mimes:pdf,doc,docx',
            'posisi_dilamar' => 'required|exists:lowongans,id',
            'tanggal_lamar' => 'required|date',
        ]);

        $cvPath = $request->file('file_cv')->store('cv');

        Lamaran::create([
            'nama_pelamar' => $request->nama_pelamar,
            'email' => $request->email,
            'file_cv' => $cvPath,
            'posisi_dilamar' => $request->posisi_dilamar,
            'tanggal_lamar' => $request->tanggal_lamar,
        ]);


        return redirect()->route('lamaran.index')->with('success', 'Lamaran berhasil ditambahkan.');
    }

    public function destroy(Lamaran $lamaran)
    {
        Storage::delete($lamaran->file_cv);
        $lamaran->delete();

        return redirect()->route('lamaran.index')->with('success', 'Lamaran berhasil dihapus.');
    }
}

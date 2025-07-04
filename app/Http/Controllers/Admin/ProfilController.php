<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilPerusahaan;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

    public function index()
    {
        $profils = ProfilPerusahaan::all();
        return view('admin.profil.index', compact('profils'));
    }

    public function create()
    {
        return view('admin.profil.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'jenis' => 'required|in:visi,misi,sejarah',
        ]);

        ProfilPerusahaan::create($validated);

        return redirect()->route('admin.profil.index')->with('success', 'Profil berhasil ditambahkan.');
    }

    public function edit(ProfilPerusahaan $profil)
    {
        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request, ProfilPerusahaan $profil)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'jenis' => 'required|in:visi,misi,sejarah',
        ]);

        $profil->update($validated);

        return redirect()->route('admin.profil.index')->with('success', 'Profil berhasil diperbarui.');
    }

    public function destroy(ProfilPerusahaan $profil)
    {
        $profil->delete();
        return redirect()->route('admin.profil.index')->with('success', 'Profil berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
   
    public function index()
    {
        $produks = Produk::with('kategori')->latest()->get();
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        $kategoris = KategoriProduk::all();
        return view('admin.produk.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image',
            'kategori_id' => 'required|exists:kategori_produks,id',
            'harga' => 'nullable|numeric',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        Produk::create($data);
        return redirect()->route('admin.produk.index')->with('success', 'Produk ditambahkan');
    }

    public function edit(Produk $produk)
    {
        $kategoris = KategoriProduk::all();
        return view('admin.produk.edit', compact('produk', 'kategoris'));
    }

    public function update(Request $request, Produk $produk)
    {
        $data = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image',
            'kategori_id' => 'required|exists:kategori_produks,id',
            'harga' => 'nullable|numeric',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        $produk->update($data);
        return redirect()->route('admin.produk.index')->with('success', 'Produk diperbarui');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('admin.produk.index')->with('success', 'Produk dihapus');
    }
}

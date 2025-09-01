<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.beritas.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.beritas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'kategori' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->kategori = $request->kategori;
        $berita->user_id = Auth::id();

        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $filename);
            $berita->gambar = $filename;
        }

        $berita->save();

        return redirect()->route('admin.beritas.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.beritas.show', compact('berita'));
    }

    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.beritas.edit', compact('berita'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        $results = \App\Models\Berita::where('judul', 'like', '%' . $query . '%')
                    ->orWhere('isi', 'like', '%' . $query . '%')
                    ->orWhere('kategori', 'like', '%' . $query . '%')
                    ->latest()
                    ->get();

        return view('search', compact('results', 'query'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'kategori' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->kategori = $request->kategori;

        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $filename);
            $berita->gambar = $filename;
        }

        $berita->save();

        return redirect()->route('admin.beritas.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('admin.beritas.index')->with('success', 'Berita berhasil dihapus.');
    }
}
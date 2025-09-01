<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    // Menampilkan semua berita di halaman home
    public function index()
    {
        $beritas = Berita::latest()->paginate(8); // ✅ Update: paginasi 8 per halaman
        return view('home', compact('beritas'));
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $post = Berita::findOrFail($id);

        $recommendedNews = Berita::where('id', '!=', $post->id)
            ->latest()
            ->limit(2)
            ->get();

        $relatedTopics = collect();
        if ($post->kategori) {
            $relatedTopics = Berita::where('kategori', $post->kategori)
                ->where('id', '!=', $post->id)
                ->inRandomOrder()
                ->limit(4)
                ->get();
        }

        return view('berita.show', compact('post', 'recommendedNews', 'relatedTopics'));
    }

    // 🔍 Fungsi pencarian berita
    public function search(Request $request)
    {
        $query = $request->input('q');

        $results = Berita::where('judul', 'like', '%' . $query . '%')
            ->orWhere('isi', 'like', '%' . $query . '%')
            ->orWhere('kategori', 'like', '%' . $query . '%')
            ->latest()
            ->get();

        return view('search', compact('results', 'query'));
    }
}
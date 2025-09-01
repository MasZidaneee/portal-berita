<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menampilkan daftar berita di homepage
    public function index()
    {
        $posts = Post::latest()->get(); // Ambil semua berita terbaru
        return view('home', compact('posts'));
    }

    // Menampilkan detail berita
    public function show($id)
    {
        // Ambil berita berdasarkan ID, jika tidak ada akan memunculkan error 404
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        $results = Berita::where('judul', 'like', '%' . $query . '%')
                    ->orWhere('isi', 'like', '%' . $query . '%')
                    ->get();

        return view('search', [
            'query' => $query,
            'results' => $results
        ]);
    }
}
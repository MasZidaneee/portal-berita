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

    // Fitur Pencarian Berita
    public function search(Request $request)
    {
        $query = $request->input('query'); // Ambil input pencarian dari form
        $posts = Post::where('title', 'like', "%{$query}%") // Cari berdasarkan title
                     ->orWhere('content', 'like', "%{$query}%") // Atau berdasarkan content
                     ->get(); // Ambil hasil pencarian

        // Kembalikan view hasil pencarian
        return view('search', compact('posts', 'query'));
    }
}
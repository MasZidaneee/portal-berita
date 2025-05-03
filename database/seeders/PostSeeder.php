<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Berita Pertama',
            'content' => 'Ini adalah berita pertama yang sangat menarik untuk dibaca oleh semua orang.',
            'image' => 'https://source.unsplash.com/600x400/?news'
        ]);

        Post::create([
            'title' => 'Berita Kedua',
            'content' => 'Ini adalah berita kedua yang juga penting dan bermanfaat.',
            'image' => 'https://source.unsplash.com/600x400/?breaking-news'
        ]);

        Post::create([
            'title' => 'Berita Ketiga',
            'content' => 'Isi berita ketiga yang menambah wawasan kamu.',
            'image' => 'https://source.unsplash.com/600x400/?media'
        ]);
    }
}
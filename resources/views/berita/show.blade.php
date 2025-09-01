@extends('layouts.app')

@section('content')
<div class="flex flex-col min-h-screen bg-white text-black">

    {{-- Konten utama --}}
    <main class="flex-1 py-12 px-4">
        <div class="max-w-5xl mx-auto md:flex md:gap-10">

            {{-- Kolom Kiri: Konten Utama --}}
            <div class="w-full">

                {{-- Judul Berita --}}
                <h1 class="text-center text-2xl md:text-3xl font-semibold mb-4 px-4">
                    {{ $post->judul }} {{-- Menggunakan $post->judul sesuai DB Anda --}}
                </h1>

                {{-- Gambar utama --}}
                <div class="flex justify-center mb-6">
                    @if ($post->gambar)
                        {{-- **PERBAIKAN PENTING DI SINI:** Ganti 'storage/' menjadi 'images/' --}}
                        <img src="{{ asset('images/' . $post->gambar) }}" alt="Gambar Berita"
                            class="rounded-lg object-cover"
                            style="width: 1050px; height: 423px;">
                    @else
                        {{-- Placeholder jika gambar tidak ada --}}
                        <img src="{{ asset('images/placeholder.jpg') }}" alt="Gambar Tidak Tersedia"
                            class="rounded-lg object-cover"
                            style="width: 1050px; height: 423px;">
                    @endif
                </div>

                {{-- Artikel + Sidebar --}}
                <div class="md:flex md:gap-10 px-4">

                    {{-- Isi Artikel --}}
                    <div class="md:w-2/3 space-y-6 text-[15px] leading-relaxed text-justify text-gray-800">
                        <div class="text-sm text-gray-500 mb-4">
                            {{ $post->created_at->diffForHumans() }} &nbsp; | &nbsp; by {{ $post->author ?? 'Admin' }} &nbsp; | &nbsp;
                            {{-- Menggunakan $post->read_time jika ada, atau hitung dari isi --}}
                            {{ $post->read_time ? $post->read_time : (str_word_count(strip_tags($post->isi)) / 200 < 1 ? '1' : ceil(str_word_count(strip_tags($post->isi)) / 200)) }} min read
                        </div>

                        {!! nl2br(e($post->isi)) !!} {{-- Menggunakan $post->isi sesuai DB Anda --}}
                    </div>

                    {{-- Sidebar Rekomendasi --}}
                    <div class="md:w-1/3 mt-12 md:mt-0">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-bold mb-4">Recommended for you</h3>

                            {{-- Loop dinamis untuk Rekomendasi --}}
                            @forelse ($recommendedNews as $recPost)
                                <div class="flex gap-3 mb-4">
                                    <a href="{{ route('berita.show', $recPost->id) }}">
                                        {{-- Pastikan path gambar konsisten dengan public/images --}}
                                        <img src="{{ asset('images/' . $recPost->gambar) }}" class="w-24 h-16 rounded object-cover" alt="{{ $recPost->judul }}">
                                    </a>
                                    <p class="text-sm font-medium leading-snug">
                                        <a href="{{ route('berita.show', $recPost->id) }}" class="text-gray-800 hover:underline">
                                            {{ $recPost->judul }}
                                        </a>
                                    </p>
                                </div>
                            @empty
                                <p class="text-sm text-gray-600">Tidak ada rekomendasi berita lain saat ini.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                {{-- Related Topics --}}
                <div class="mt-16">
                    <h2 class="text-2xl font-bold text-center mb-6">Related Topics</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                        {{-- Loop dinamis untuk Related Topics --}}
                        @forelse ($relatedTopics as $relatedPost)
                            <a href="{{ route('berita.show', $relatedPost->id) }}" class="block transform transition duration-300 hover:scale-105 active:scale-95">
                                <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg">
                                    {{-- Pastikan path gambar konsisten dengan public/images --}}
                                    <img src="{{ asset('images/' . $relatedPost->gambar) }}" class="w-full h-40 object-cover" alt="{{ $relatedPost->judul }}">
                                    <div class="p-4">
                                        <h3 class="font-semibold text-sm text-gray-800">{{ $relatedPost->judul }}</h3>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="col-span-full text-center text-gray-600">Tidak ada topik terkait saat ini.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="bg-gradient-to-r from-blue-700 to-pink-600 mt-16">
        <div class="max-w-7xl mx-auto px-4 py-8 flex flex-col md:flex-row justify-between items-start md:items-center space-y-6 md:space-y-0 text-white">
            
            <!-- Logo & Hak Cipta -->
            <div>
                <img src="{{ asset('images/logo.png') }}" class="w-20 mb-2" alt="Logo">
                <p class="text-xs">© 2025 WinniCode</p>
            </div>

            <!-- Links -->
            <div class="flex flex-col space-y-2 text-sm">
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Do not sell my personal info</a>
                <a href="#" class="hover:underline">Terms of Service</a>
            </div>

            <!-- Navigation -->
            <div class="text-sm space-x-4">
                <a href="#" class="hover:underline">About</a>
                <a href="#" class="hover:underline">Contact</a>
                <a href="#" class="hover:underline">Careers</a>
                <a href="#" class="hover:underline">Coupons</a>
            </div>

            <!-- Social Icons -->
            <div class="text-xl space-x-4">
                <a href="#" class="hover:text-blue-300"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-pink-300"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-green-300"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="hover:text-gray-200"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>
    </footer>
@endsection
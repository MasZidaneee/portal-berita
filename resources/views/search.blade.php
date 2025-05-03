@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Hasil Pencarian: "{{ $query }}"</h1>

    @if($posts->isEmpty())
        <p class="text-gray-600">Tidak ada berita yang ditemukan.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white rounded shadow-md overflow-hidden">
                    @if($post->image)
                        <img src="{{ $post->image }}" alt="Gambar Berita" class="w-full h-48 object-cover">
                    @endif
                    <div class="p-4">
                        <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                        <p class="text-gray-600 text-sm mt-2">{{ Str::limit($post->content, 100) }}</p>
                        <a href="{{ route('berita.show', $post->id) }}" class="text-blue-600 hover:underline mt-3 inline-block">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
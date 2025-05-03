@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-xl">
        <h1 class="text-4xl font-bold text-gray-800">{{ $post->title }}</h1>
        <p class="text-gray-500 text-sm mt-2">{{ $post->created_at->format('d F Y') }}</p>

        @if($post->image)
            <img src="{{ $post->image }}" alt="Gambar Berita" class="w-full h-80 object-cover rounded-lg mt-6">
        @endif

        <p class="text-gray-700 mt-6 text-lg leading-relaxed">{{ $post->content }}</p>

        <a href="{{ url()->previous() }}" class="text-blue-600 hover:underline mt-6 inline-block">Kembali ke Beranda</a>
    </div>
@endsection 
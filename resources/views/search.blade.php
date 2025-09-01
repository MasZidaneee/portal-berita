@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-8">
    <h2 class="text-xl font-bold mb-4">Hasil Pencarian untuk: "{{ $query }}"</h2>

    @if ($results->isEmpty())
        <p class="text-gray-500">Tidak ditemukan berita yang cocok.</p>
    @else
        <ul class="space-y-4">
            @foreach ($results as $berita)
                <li class="border-b pb-3">
                    <a href="{{ route('berita.show', $berita->id) }}" class="text-blue-600 font-semibold hover:underline">
                        {{ $berita->judul }}
                    </a>
                    <p class="text-sm text-gray-600">{{ $berita->kategori }} | {{ $berita->created_at->format('d M Y') }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
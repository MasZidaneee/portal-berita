@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10">
  <h2 class="text-2xl font-bold mb-6">Edit Berita</h2>

  <form action="{{ route('admin.beritas.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')

    <div>
      <label for="judul" class="block mb-1 font-medium">Judul Berita</label>
      <input type="text" name="judul" id="judul" value="{{ $berita->judul }}" class="w-full border-gray-300 rounded-lg shadow-sm" required>
    </div>

    <div>
      <label for="kategori" class="block mb-1 font-medium">Kategori</label>
      <select name="kategori" id="kategori" class="w-full border-gray-300 rounded-lg shadow-sm">
        <option value="PATCH" {{ $berita->kategori == 'PATCH' ? 'selected' : '' }}>PATCH</option>
        <option value="PROMO" {{ $berita->kategori == 'PROMO' ? 'selected' : '' }}>PROMO</option>
        <option value="EVENT" {{ $berita->kategori == 'EVENT' ? 'selected' : '' }}>EVENT</option>
      </select>
    </div>

    <div>
      <label for="gambar" class="block mb-1 font-medium">Gambar</label>
      <input type="file" name="gambar" id="gambar" class="w-full border-gray-300 rounded-lg shadow-sm">
      @if ($berita->gambar)
        <p class="mt-2 text-sm text-gray-500">Gambar saat ini: {{ $berita->gambar }}</p>
      @endif
    </div>

    <div>
      <label for="isi" class="block mb-1 font-medium">Isi Berita</label>
      <textarea name="isi" id="isi" rows="6" class="w-full border-gray-300 rounded-lg shadow-sm" required>{{ $berita->isi }}</textarea>
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
      Update
    </button>
  </form>
</div>
@endsection
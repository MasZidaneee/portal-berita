@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10">
  <h2 class="text-2xl font-bold mb-6 text-white">Tambah Berita Baru</h2>

  <form action="{{ route('admin.beritas.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    <div>
      <label for="judul" class="block mb-1 font-medium text-white">Judul Berita</label>
      <input type="text" name="judul" id="judul" 
        class="w-full bg-gray-800 text-white border border-gray-600 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" 
        required>
    </div>

    <div>
      <label for="kategori" class="block mb-1 font-medium text-white">Kategori</label>
      <select name="kategori" id="kategori" 
        class="w-full bg-gray-800 text-white border border-gray-600 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" 
        required>
        <option value="">-- Pilih Kategori --</option>
        <option value="Education">Education</option>
        <option value="Sports">Sports</option>
        <option value="Worlds">Worlds</option>
        <option value="Healths">Healths</option>
      </select>
    </div>

    <div>
      <label for="gambar" class="block mb-1 font-medium text-white">Gambar</label>
      <input type="file" name="gambar" id="gambar" 
        class="w-full bg-gray-800 text-white border border-gray-600 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
      <label for="isi" class="block mb-1 font-medium text-white">Isi Berita</label>
      <textarea name="isi" id="isi" rows="6" 
        class="w-full bg-gray-800 text-white border border-gray-600 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" 
        required></textarea>
    </div>

    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
      Simpan
    </button>
  </form>
</div>
@endsection
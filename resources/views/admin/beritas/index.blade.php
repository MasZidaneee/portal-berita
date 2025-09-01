@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">
  @auth
    @if (Auth::user()->role === 'admin')
      <div class="mb-6 text-right">
        <a href="{{ route('admin.beritas.create') }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
          <i class="fas fa-plus mr-1"></i> Tambah Berita
        </a>
        <a href="{{ route('admin.beritas.index') }}" class="px-4 py-2 ml-2 bg-purple-600 text-white rounded hover:bg-purple-700">
          <i class="fas fa-tools mr-1"></i> Dashboard Admin
        </a>
      </div>
    @endif
  @endauth

  <h2 class="text-2xl font-bold mb-6">Daftar Berita</h2>

  @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
      {{ session('success') }}
    </div>
  @endif

  <div class="overflow-x-auto">
    <table class="w-full table-auto bg-white text-black shadow-md rounded-lg overflow-hidden">
      <thead class="bg-gray-200">
        <tr class="text-left">
          <th class="px-4 py-3">Judul</th>
          <th class="px-4 py-3">Kategori</th>
          <th class="px-4 py-3">Tanggal</th>
          <th class="px-4 py-3">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($beritas as $berita)
        <tr class="border-b">
          <td class="px-4 py-3">{{ $berita->judul }}</td>
          <td class="px-4 py-3">{{ $berita->kategori }}</td>
          <td class="px-4 py-3">{{ \Carbon\Carbon::parse($berita->created_at)->format('d M Y') }}</td>
          <td class="px-4 py-3 space-x-2">
            <a href="{{ route('admin.beritas.edit', $berita->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>

            <form action="{{ route('admin.beritas.destroy', $berita->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach

        @if($beritas->isEmpty())
        <tr>
          <td colspan="4" class="text-center py-4 text-gray-500">Belum ada berita.</td>
        </tr>
        @endif
      </tbody>
    </table>
  </div>
</div>
@endsection
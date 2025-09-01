@extends('layouts.app')

@section('content')

<!-- Hero dengan Efek Typewriter -->
<section class="min-h-[70vh] flex items-center justify-center bg-gray-900 text-white relative">
  <div class="text-center px-6 max-w-4xl mx-auto">
    <h2 class="text-lg md:text-xl font-light mb-2">Winnicode Garuda Teknologi</h2>
    <h1 class="text-2xl md:text-4xl font-extrabold mb-4 leading-snug">
      <span id="typedText" class="border-r-2 pr-1 animate-pulse bg-gradient-to-r from-blue-500 to-pink-500 text-transparent bg-clip-text"></span>
    </h1>
    <p class="text-base md:text-lg font-light">"Portal Jurnalistik dan berita Untuk sistem layanan terpadu."</p>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const texts = [
      "Selamat Datang di",
      "Winnicode Garuda Teknologi!!",
      "Sumber Utama Berita Terkini & Terpercaya",
    ];

    const typedText = document.getElementById("typedText");
    let index = 0;
    let charIndex = 0;

    function type() {
      if (charIndex < texts[index].length) {
        const char = texts[index].charAt(charIndex);
        typedText.innerHTML += char === "\n" ? "<br>" : char;
        charIndex++;
        setTimeout(type, 80);
      } else {
        setTimeout(() => {
          typedText.innerHTML = "";
          charIndex = 0;
          index = (index + 1) % texts.length;
          type();
        }, 2000);
      }
    }

    type();
  });
</script>

<!-- Grid Berita -->
<section class="py-12 bg-gradient-to-b from-gray-900 via-gray-900 to-[#4f46e5]">
  <div class="max-w-6xl mx-auto px-4">
    <div id="news-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      @foreach($beritas as $berita)
        @if (!Str::startsWith($berita->judul, 'Judul Berita')) {{-- Filter dummy --}}
        <div class="bg-white text-black rounded shadow-lg hover:scale-105 transform transition duration-300 overflow-hidden border-2
            @switch($berita->kategori)
              @case('PATCH') border-green-500 @break
              @case('PROMO') border-pink-500 @break
              @case('EVENT') border-orange-500 @break
              @default border-gray-300
            @endswitch">
          <a href="{{ route('berita.show', $berita->id) }}" class="block">
            <div class="relative">
              <img src="{{ asset('images/' . $berita->gambar) }}" 
                   alt="News Image" 
                   class="w-full h-48 object-cover">
              <div class="absolute bottom-0 left-0 bg-black/60 text-white text-xs px-3 py-1 uppercase">
                {{ $berita->kategori }}
              </div>
            </div>
            <div class="p-4">
              <h4 class="font-semibold text-md mb-2 line-clamp-2 text-black">{{ $berita->judul }}</h4>
              <p class="text-sm text-gray-700 line-clamp-3">{{ \Illuminate\Support\Str::limit($berita->isi, 100) }}</p>
              <div class="text-xs text-right text-blue-500 mt-2">
                {{ \Carbon\Carbon::parse($berita->created_at)->format('d. M. Y') }}
              </div>
            </div>  
          </a>
        </div>
        @endif
      @endforeach
    </div>

    <!-- ✅ Tombol Pagination -->
    <div class="mt-10 text-center">
      {{ $beritas->links('vendor.pagination.tailwind') }}
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gradient-to-r from-blue-800 via-purple-700 to-pink-600 text-white py-8">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-sm">

    <!-- Tautan -->
    <div>
      <h3 class="text-base font-semibold mb-2">TAUTAN</h3>
      <ul class="space-y-1">
        <li class="flex items-center gap-2">
          <i class="fas fa-globe"></i>
          <a href="https://www.winnicode.com" target="_blank" class="hover:underline">www.winnicode.com</a>
        </li>
        <li class="flex items-center gap-2">
          <i class="fab fa-instagram"></i>
          <a href="https://instagram.com/winnicode" target="_blank" class="hover:underline">Instagram</a>
        </li>
      </ul>
    </div>

    <!-- Sitemap -->
    <div>
      <h3 class="text-base font-semibold mb-2">SITEMAP</h3>
      <ul class="space-y-1 underline">
        <li><a href="/">Beranda</a></li>
        <li><a href="/berita">Berita</a></li>
        <li><a href="#">Kontak Kami</a></li>
        <li><a href="#">Privasi & Policy</a></li>
        <li><a href="#">Tentang</a></li>
      </ul>
    </div>

    <!-- Kontak -->
    <div class="col-span-2">
      <h3 class="text-base font-semibold mb-2">KONTAK KAMI</h3>
      <ul class="space-y-1">
        <li><strong>E-Mail:</strong> winnicodegarudaofficial@gmail.com</li>
        <li><strong>Call Center:</strong> 6285159932501 (24 Jam)</li>
        <li>
          <strong>Alamat (Cabang Bandung):</strong><br>
          Jl. Asia Afrika No.158, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40261
        </li>
        <li><strong>Alamat (Cabang Yogyakarta):</strong> Bantul, Yogyakarta</li>
        <li><strong>Alamat (Cabang Jakarta):</strong> Bekasi, Jawa Barat</li>
        <li><strong>Administrasi Berkas:</strong> +6285159932501</li>
      </ul>
    </div>
  </div>

  <div class="text-center mt-6 text-xs text-gray-300">
    &copy; 2025 | WinniCode Garuda Teknologi
  </div>
</footer>

@endsection
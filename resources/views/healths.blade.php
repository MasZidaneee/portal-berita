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
                    Nearly half of all US governors urge drastic change for global health
                </h1>

                {{-- Gambar utama --}}
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/healths-sub1.jpg') }}" alt="Main Politics"
                        class="rounded-lg object-cover"
                        style="width: 1050px; height: 423px;">
                </div>

                {{-- Artikel + Sidebar --}}
                <div class="md:flex md:gap-10 px-4">

                    {{-- Isi Artikel --}}
                    <div class="md:w-2/3 space-y-6 text-[15px] leading-relaxed text-justify text-gray-800">
                        <div class="text-sm text-gray-500 mb-4">
                            12 hours ago &nbsp; | &nbsp; by Caroline Cassady &nbsp; | &nbsp; 4 min read
                        </div>

                        <p>
                            In a unified and urgent call, nearly half of all U.S. governors have voiced the need for drastic reforms to address global health challenges. Citing the lasting impact of the COVID-19 pandemic, climate-related illnesses, and rising healthcare inequality, these state leaders are pushing for bold international cooperation and policy shifts.
                        </p>
                        <p>
                            The revisions have been criticised by civil society groups, who say it could take the world’s third-biggest democracy back to the draconian "New Order" era of former strongman president Suharto...
                        </p>
                        <p>
                            Speaker Puan Maharani led the unanimous vote in a plenary council and officially passed the law, saying that it was in accordance with the principles of democracy, human rights and civil supremacy.
                        </p>
                        <p>
                            President Prabowo Subianto, who took office last October and was a special forces commander under Suharto, has been expanding the armed forces’ role into what were considered civilian areas...
                        </p>
                    </div>
                    {{-- Sidebar --}}
                    <div class="md:w-1/3 mt-12 md:mt-0">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-bold mb-4">Recommended for you</h3>

                            {{-- Rekomendasi 1 --}}
                            <div class="flex gap-3 mb-4">
                                <img src="{{ asset('images/sidebar1.jpg') }}" class="w-24 h-16 rounded object-cover" alt="">
                                <p class="text-sm font-medium leading-snug">
                                    Millions rely on emergency pandemic benefits for rent, food, and medicine.
                                </p>
                            </div>

                            {{-- Rekomendasi 2 --}}
                            <div class="flex gap-3">
                                <img src="{{ asset('images/sidebar2.jpg') }}" class="w-24 h-16 rounded object-cover" alt="">
                                <p class="text-sm font-medium leading-snug">
                                    Now, that lifeline could disappear.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Artikel Kedua --}}
                <div class="md:w-2/3 space-y-6 text-[15px] leading-relaxed text-justify text-gray-800">
                    {{-- Judul --}}
                    <h2 class="text-center text-2xl md:text-3xl font-semibold mb-4">
                        Healthcare NGO In India - Financial Support Us
                    </h2>

                    {{-- Gambar --}}
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('images/healths-sub2.jpg') }}" alt="politics-sub2"
                            class="rounded-lg object-cover"
                            style="width: 1050px; height: 423px;">
                    </div>

                    {{-- Isi Artikel --}}
                    <div class="space-y-6 text-[15px] leading-relaxed text-justify text-gray-800">
                        <div class="text-sm text-gray-500 mb-4">
                            8 hours ago &nbsp; | &nbsp; by Nadia Rachman &nbsp; | &nbsp; 5 min read
                        </div>

                        <p>
                            In response to a surge in cyber attacks targeting government and private systems, Indonesia’s parliament is expediting the passage of a new cybersecurity bill aimed at improving national digital defense...
                        </p>
                        <p>
                            The proposed law includes provisions for stricter enforcement, enhanced cooperation with regional allies, and expanded authority for the country’s cyber defense agency.
                        </p>
                        <p>
                            Experts have praised the bill's intent, but some have warned about the need for checks and balances to prevent misuse and ensure accountability.
                        </p>
                    </div>
                </div>

                {{-- Related Topics --}}
                <div class="mt-16">
                    <h2 class="text-2xl font-bold text-center mb-6">Related Topics</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                        @php
                            $relatedItems = [
                                ['img' => 'berita5.jpg', 'title' => 'Healths', 'link' => '/news/healths'],
                                ['img' => 'berita2.jpg', 'title' => 'Worlds', 'link' => '/news/worlds'],
                                ['img' => 'berita3.jpg', 'title' => 'Education', 'link' => '/news/education'],
                                ['img' => 'berita4.jpg', 'title' => 'Sports', 'link' => '/news/sports'],
                            ];
                        @endphp

                        @foreach ($relatedItems as $item)
                            <a href="{{ $item['link'] }}" class="block transform transition duration-300 hover:scale-105 active:scale-95">
                                <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-lg">
                                    <img src="{{ asset('images/' . $item['img']) }}" class="w-full h-40 object-cover" alt="{{ $item['title'] }}">
                                    <div class="p-4">
                                        <h3 class="font-semibold text-sm text-gray-800">{{ $item['title'] }}</h3>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

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

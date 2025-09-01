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
                    France win the World Cup: Glory for Les Bleus in Russia
                </h1>

                {{-- Gambar utama --}}
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/sports-sub1.jpg') }}" alt="Main Politics"
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
                            The world watched as France lifted the 2018 FIFA World Cup trophy high into the Moscow sky, sealing a triumphant 4–2 victory over Croatia in a thrilling final. It was a moment of national pride and global celebration, as Les Bleus claimed their second World Cup title, exactly 20 years after their first in 1998.                        </p>
                        <p>
                            Led by coach Didier Deschamps, France's young and dynamic squad displayed discipline, flair, and unity throughout the tournament. Rising stars like Kylian Mbappé and Antoine Griezmann left their mark on the world stage, while veteran players brought experience and composure to every match.                        </p>
                        <p>
                            The final showcased a perfect blend of teamwork and individual brilliance. From Pogba’s precision to Mbappé’s unstoppable pace, France proved they were more than just favorites—they were champions in every sense. The victory was not only about football, but about resilience, diversity, and the spirit of a united nation.                        </p>
                        <p>
                            As the Eiffel Tower lit up in blue and fans danced across the Champs-Élysées, one message echoed across the globe: France is back on top of the football world, and their legacy has only just begun.                        </p>
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
                        Barcelona United: A New Era Takes Shape in Europe
                    </h2>

                    {{-- Gambar --}}
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('images/sports-sub2.jpg') }}" alt="politics-sub2"
                            class="rounded-lg object-cover"
                            style="width: 1050px; height: 423px;">
                    </div>

                    {{-- Isi Artikel --}}
                    <div class="space-y-6 text-[15px] leading-relaxed text-justify text-gray-800">
                        <div class="text-sm text-gray-500 mb-4">
                            8 hours ago &nbsp; | &nbsp; by Nadia Rachman &nbsp; | &nbsp; 5 min read
                        </div>

                        <p>
                            Under the bright lights of Lisbon, Barcelona stood tall—united, focused, and ready to face the challenge. With the iconic crest laid before them and thousands of fans in the stands, this moment captured the pride and purpose of a team hungry to restore its European glory.                        </p>
                        <p>
                            Dressed in a sleek black kit, the players brought more than just talent to the pitch. They carried history, ambition, and the unwavering support of millions. From veterans like Lewandowski to rising stars like Pedri and Gavi, every name on that lineup symbolized a new chapter in Barça's legacy.                        </p>
                        <p>
                            Despite the pressure of the Champions League, the team displayed confidence and cohesion. This wasn’t just about winning a match—it was about proving that Barcelona is rebuilding with strength, identity, and fearless determination.                        </p>
                        <p>
                            Whether it ends in silverware or a story of resilience, moments like this remind us why football is more than a game. For Barcelona and its fans, it’s a bond, a belief, and a battle for greatness that never fades.               </p>
                    </div>
                </div>

                {{-- Related Topics --}}
                <div class="mt-16">
                    <h2 class="text-2xl font-bold text-center mb-6">Related Topics</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                        @php
                            $relatedImages = ['berita5.jpg', 'berita2.jpg', 'berita3.jpg', 'berita4.jpg'];
                            $relatedLinks = [
                                '/news/berita5',
                                '/news/berita2',
                                '/news/berita3',
                                '/news/berita4',
                            ];
                        @endphp

                        @foreach ($relatedImages as $i => $img)
                            <a href="{{ $relatedLinks[$i] }}" class="block">
                                <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
                                    <img src="{{ asset('images/' . $img) }}" class="w-full h-40 object-cover" alt="Related {{ $i + 1 }}">
                                    <div class="p-4">
                                        <h3 class="font-semibold text-sm text-gray-800">Related News</h3>
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
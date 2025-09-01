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
                    Indonesia police fire tear gas as rallies over new laws turn violent
                </h1>

                {{-- Gambar utama --}}
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('images/politics-sub3.jpg') }}" alt="Main Politics"
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
                            Thousands took to the streets across Indonesia to protest against the passing of controversial new laws. What began as peaceful demonstrations quickly escalated into chaos as frustration and anger mounted among the crowd. Protesters voiced concerns over the erosion of democratic values and the lack of transparency in the legislative process.
                        </p>
                        <p>
                            As tensions rose, clashes broke out between demonstrators and police. In response, authorities deployed tear gas to disperse the masses. Thick clouds of smoke filled the air, forcing many to flee while others stood their ground, chanting and holding signs. The scenes captured reflect a growing unrest among the Indonesian public.
                        </p>
                        <p>
                            Many protesters, largely students and young activists, claimed that the new laws threaten civil liberties and undermine the fight against corruption. Social media has been flooded with videos and testimonies showing the intensity of the confrontation and calling for broader international awareness.
                        </p>
                        <p>
                            The use of force has drawn criticism from human rights organizations, who urge the government to listen to the people instead of silencing them. As the dust settles, one question remains: how far will the people go to protect their democracy?
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
                        Indonesian Military Official Defends Awful Test...
                    </h2>

                    {{-- Gambar --}}
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('images/politics-sub4.jpg') }}" alt="politics-sub2"
                            class="rounded-lg object-cover"
                            style="width: 1050px; height: 423px;">
                    </div>

                    {{-- Isi Artikel --}}
                    <div class="space-y-6 text-[15px] leading-relaxed text-justify text-gray-800">
                        <div class="text-sm text-gray-500 mb-4">
                            8 hours ago &nbsp; | &nbsp; by Nadia Rachman &nbsp; | &nbsp; 5 min read
                        </div>

                        <p>
                            A recent controversy has sparked national outrage after an Indonesian military official publicly defended a widely criticized and outdated test. The test, reportedly used in the recruitment process, has been condemned by human rights groups as invasive, unscientific, and degrading, especially toward female applicants.
                        </p>
                        <p>
                            Despite mounting criticism, the official justified the test as a “necessary measure” to maintain discipline and uphold military standards. His statement drew backlash from civil society, medical professionals, and international observers, who argue that such practices violate basic human rights and have no place in a modern military institution.
                        </p>
                        <p>
                            Activists and advocacy groups have long called for reform within the Indonesian armed forces, urging an end to discriminatory and humiliating procedures. The official’s defense of the test has only reignited calls for transparency, accountability, and respect for individual dignity within state institutions.
                        </p>
                        <p>
                            As the issue gains traction online, citizens continue to question how long outdated practices will be allowed to persist under the guise of tradition or order. The debate is no longer just about a single test—it reflects the broader struggle for reform, gender equality, and human rights in Indonesia.
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
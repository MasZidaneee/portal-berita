@extends('layouts.app')

@section('content')
<div class="bg-white text-black py-12 px-4 min-h-screen">
    <div class="max-w-6xl mx-auto md:flex md:gap-10">

        {{-- Konten Utama --}}
        <div class="md:w-2/3">

            {{-- Judul Berita --}}
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
                Indonesia parliament passes contentious amendments to military law
            </h1>

            {{-- Info waktu --}}
            <div class="text-sm text-gray-500 mb-4">
                12 hours ago &nbsp; | &nbsp; by Caroline Cassady &nbsp; | &nbsp; 4 min read
            </div>

            {{-- Gambar utama --}}
            <div class="mb-6">
                <img src="{{ asset('images/politics-main.jpg') }}" alt="Main Politics" class="w-full h-auto rounded-lg object-cover">
            </div>

            {{-- Isi Artikel --}}
            <div class="space-y-6 text-[15px] leading-relaxed">
                <p>
                    Indonesia’s parliament passed revisions to the country’s military law on Thursday, allocating more civilian posts for military officers as hundreds of students and activists protested against the legislation...
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

            {{-- Artikel Tambahan --}}
            <div class="mt-12">
                <h2 class="text-3xl font-bold mb-2">
                    Protesters rally in Jakarta over controversial media regulation bill
                </h2>
                <div class="text-sm text-gray-500 mb-4">
                    3 hours ago &nbsp; | &nbsp; by Anita Ramadhani &nbsp; | &nbsp; 5 min read
                </div>
                <img src="{{ asset('images/politic-sub1.jpg') }}" alt="Second Politics" class="w-full h-auto rounded-lg object-cover mb-6">

                <div class="space-y-6 text-[15px] leading-relaxed">
                    <p>
                        Thousands of people took to the streets in Jakarta to protest a proposed bill critics say would limit press freedom and increase government control over the media.
                    </p>
                    <p>
                        Activists say the bill contains vague provisions that could be used to punish journalists or outlets deemed "disruptive to public order".
                    </p>
                    <p>
                        The government insists that the bill is meant to promote responsible journalism and combat disinformation, but media unions argue it threatens independence.
                    </p>
                    <p>
                        The Indonesian Press Council has called for lawmakers to delay the bill and consult more widely with civil society and press organizations.
                    </p>
                </div>
            </div>
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

    {{-- Related Topics --}}
    <div class="mt-16">
        <h2 class="text-2xl font-bold text-center mb-6">Related Topics</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @php
                $relatedImages = ['berita5.jpg', 'berita2.jpg', 'berita3.jpg', 'berita4.jpg'];
            @endphp

            @foreach ($relatedImages as $i => $img)
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <img src="{{ asset('images/' . $img) }}" class="w-full h-40 object-cover" alt="Related {{ $i + 1 }}">
                <div class="p-4">
                    <h3 class="font-semibold text-sm">Related News {{ $i + 1 }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Footer --}}
<footer class="bg-gray-800 mt-16">
    <div class="max-w-7xl mx-auto px-4 py-8 flex flex-col md:flex-row justify-between items-start md:items-center space-y-6 md:space-y-0">
        <div>
            <img src="{{ asset('images/logo.png') }}" class="w-20 mb-2" alt="Logo">
            <p class="text-xs text-gray-400">© 2025 WinniCode</p>
        </div>
        <div class="text-sm text-white space-y-2">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>
        <div class="text-sm text-white space-x-4">
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">Careers</a>
        </div>
        <div class="text-white text-xl space-x-4">
            <a href="#" class="hover:text-blue-500"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-green-500"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="hover:text-gray-400"><i class="fab fa-x-twitter"></i></a>
        </div>
    </div>
</footer>
@endsection

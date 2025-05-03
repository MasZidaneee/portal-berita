@extends('layouts.app')

@section('content')

<!-- Trending Section -->
<section class="bg-[#1F2937] text-white py-12">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-2xl font-semibold mb-6 text-black">Trending News</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start bg-gray-800 p-8 rounded-lg shadow-md">
      <!-- ✅ Background biru muda, padding, rounded, dan shadow -->
      
      <div class="flex justify-center">
        <img src="{{ asset('images/headline.jpg') }}" 
             alt="Trending Image" 
             class="w-full max-w-xs object-cover rounded-lg">
      </div>

      <div>
        <span class="text-sm uppercase text-white">Trending</span>
        <h3 class="text-2xl font-bold my-2 text-white">
          Cake meme reflects coronavirus absurdity in a world where nothing is what it seems
        </h3>
        <p class="text-sm text-white">
          Early this month, a viral video spotlighting hyper-realistic cakes took over social media...
        </p>
      </div>
    </div>

  </div>
</section>

<!-- Grid Berita -->
<section class="py-12 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @for ($i = 0; $i < 6; $i++)
            <div class="bg-white rounded shadow hover:shadow-lg transition">
                <img src="{{ asset('images/berita1.png') }}" alt="News Image" class="w-full h-48 object-cover rounded-t">
                <div class="p-4">
                    <h4 class="font-semibold text-md mb-2">
                        John Lewis to make final journey across Edmund Pettus Bridge in procession
                    </h4>
                    <p class="text-sm text-gray-600">
                        The body of the late U.S. Rep. John Lewis lies in state as tributes continue to pour in...
                    </p>
                </div>
            </div>
            @endfor
        </div>

        <div class="text-center mt-8">
            <a href="#" class="px-6 py-2 border border-black text-black hover:bg-black hover:text-white transition rounded">
                View More
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start md:items-center space-y-6 md:space-y-0">
    
    <!-- Logo dan copyright -->
    <div class="flex flex-col items-center md:items-start">
      <img src="{{ asset('images/logo.png') }}" alt="Winnicode Logo" class="w-20 mb-2">
      <p class="text-xs text-gray-400">copyright © 2025 | WinniCode</p>
    </div>

    <!-- Links -->
    <div class="flex flex-col space-y-2 text-sm text-white">
      <a href="#">Privacy Policy</a>
      <a href="#">Do not sell my personal info</a>
      <a href="#">Terms of Service</a>
    </div>

    <!-- Navigation -->
    <div class="flex space-x-6 text-sm text-white">
      <a href="#">About</a>
      <a href="#">Contact</a>
      <a href="#">Careers</a>
      <a href="#">Coupons</a>
    </div>

        <!-- Social Icons -->
    <div class="flex space-x-6 text-white text-2xl py-6 justify-center">
        <a href="#" class="hover:text-blue-600 transition-colors duration-300">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="hover:text-pink-500 transition-colors duration-300">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="hover:text-green-500 transition-colors duration-300">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="#" class="hover:text-gray-400 transition-colors duration-300">
            <i class="fab fa-x-twitter"></i> <!-- ✅ Ganti dari fa-twitter ke fa-x-twitter -->
        </a>
    </div>
  </div>
</footer>


@endsection
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal Berita</title>

  <!-- Tailwind CSS & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Alpine.js untuk interaktivitas -->
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-black text-white">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-blue-800 via-purple-700 to-pink-600 py-4 shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between px-4">

      <!-- Logo -->
      <div class="flex items-center space-x-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-10 rounded-full">
        <span class="text-white font-semibold text-lg">Winnicode Garuda Teknologi</span>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-6">
        <a href="/" class="text-white hover:text-gray-200 font-medium">Home</a>
        <a href="/healths" class="text-white hover:text-gray-200 font-medium">Healths</a>
        <a href="/worlds" class="text-white hover:text-gray-200 font-medium">Worlds</a>
        <a href="/education" class="text-white hover:text-gray-200 font-medium">Education</a>
        <a href="/sports" class="text-white hover:text-gray-200 font-medium">Sports</a>

        <!-- 🔍 Elegant Search Bar -->
        <form action="{{ route('search') }}" method="GET" class="relative hidden md:flex items-center">
          <input 
            type="text" 
            name="q" 
            value="{{ request('q') }}" 
            placeholder="Cari berita..." 
            class="pl-4 pr-10 py-2 rounded-full bg-white text-black placeholder-gray-400 border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:outline-none w-64 transition-all duration-200 shadow-sm"
          >
          <button type="submit" class="absolute right-2 text-blue-600 hover:text-blue-800 transition duration-200">
            <i class="fas fa-search"></i>
          </button>
        </form>

       <!-- 👤 Elegant Auth Dropdown -->
        @auth
        <div class="relative ml-4" x-data="{ open: false }">
          <button @click="open = !open"
            class="flex items-center gap-2 bg-white text-black rounded-full px-4 py-2 shadow hover:bg-gray-100 transition-all duration-200 focus:outline-none">
            <div class="w-8 h-8 bg-gradient-to-br from-blue-600 to-purple-500 rounded-full flex items-center justify-center text-white">
              <i class="fas fa-user text-sm"></i>
            </div>
            <span class="hidden md:inline font-medium">{{ Auth::user()->name }}</span>
            @if(Auth::user()->role === 'admin')
              <span class="ml-2 text-xs bg-red-600 text-white px-2 py-0.5 rounded-full">Admin</span>
            @endif
            <i class="fas fa-chevron-down text-xs ml-1"></i>
          </button>

          <!-- Dropdown -->
          <div x-show="open" @click.away="open = false"
            class="absolute right-0 mt-2 w-52 bg-white text-black rounded-xl border border-gray-200 shadow-xl z-50 py-2 transition-all duration-200 animate-fade-in">
            @if (Auth::user()->role === 'admin')
              <a href="{{ route('admin.beritas.index') }}" class="block px-4 py-2 hover:bg-gray-100 transition">
                <i class="fas fa-tools mr-2 text-blue-600"></i> Dashboard Admin
              </a>
            @endif
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100 transition">
                <i class="fas fa-sign-out-alt mr-2 text-red-600"></i> Logout
              </button>
            </form>
          </div>
        </div>
        @endauth

      <!-- Mobile Menu Toggle -->
      <div class="md:hidden">
        <button id="mobile-menu-toggle" class="text-white text-2xl focus:outline-none">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pt-4 pb-4 bg-black space-y-2">
      <a href="/" class="block text-white hover:text-gray-400">Home</a>
      <a href="/healths" class="block text-white hover:text-gray-400">Healths</a>
      <a href="/worlds" class="block text-white hover:text-gray-400">Worlds</a>
      <a href="/education" class="block text-white hover:text-gray-400">Education</a>
      <a href="/sports" class="block text-white hover:text-gray-400">Sports</a>

      @auth
        @if (Auth::user()->role === 'admin')
          <a href="{{ route('admin.beritas.index') }}" class="block text-white hover:text-gray-400">
            <i class="fas fa-tools mr-1"></i> Dashboard Admin
          </a>
        @endif
        <a href="{{ route('profile.edit') }}" class="block text-white hover:text-gray-400">
          <i class="fas fa-user mr-1"></i> Profile
        </a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="w-full text-left px-4 py-2 text-white hover:text-gray-400">
            <i class="fas fa-sign-out-alt mr-1"></i> Logout
          </button>
        </form>
      @else
        <a href="{{ route('login') }}" class="block text-white hover:text-gray-400">
          <i class="fas fa-sign-in-alt mr-1"></i> Login
        </a>
        <a href="{{ route('register') }}" class="block text-white hover:text-gray-400">
          <i class="fas fa-user-plus mr-1"></i> Register
        </a>
      @endauth

      <!-- Search (Mobile) -->
      <form action="{{ route('search') }}" method="GET" class="pt-3">
        <input type="text" name="q" value="{{ request('q') }}" placeholder="Search..."
               class="w-full px-3 py-2 rounded-lg border border-gray-600 bg-gray-800 text-white focus:outline-none">
        <button type="submit" class="w-full mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
          Cari
        </button>
      </form>
    </div>
  </nav>

  <!-- Konten Utama -->
  @yield('content')

  <!-- Scroll to Top -->
  <button id="scrollToTopBtn" class="hidden fixed bottom-6 right-6 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Script -->
  <script>
    const scrollBtn = document.getElementById('scrollToTopBtn');
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    window.addEventListener('scroll', () => {
      scrollBtn.classList.toggle('hidden', window.pageYOffset <= 300);
    });

    scrollBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    toggleBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
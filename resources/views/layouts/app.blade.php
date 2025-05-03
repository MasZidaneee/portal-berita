<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex items-center justify-between">
            {{-- Logo di sebelah kiri --}}
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-10">
                <span class="text-white font-semibold text-lg">Winnicode Garuda Teknologi</span>
            </div>

            {{-- Menu kategori di tengah --}}
            <div class="absolute left-1/2 transform -translate-x-1/2 flex space-x-8">
                <a href="/" class="text-white text-lg font-semibold hover:text-gray-400">Berita</a>
                <a href="/politics" class="text-white text-lg font-semibold hover:text-gray-400">Politics</a>
                <a href="/indonesia" class="text-white text-lg font-semibold hover:text-gray-400">Indonesia</a>
                <a href="/dunia" class="text-white text-lg font-semibold hover:text-gray-400">Dunia</a>
                <a href="/sports" class="text-white text-lg font-semibold hover:text-gray-400">Sports</a>
            </div>

            {{-- Form pencarian di pojok kanan --}}
            <form action="{{ route('search') }}" method="GET" 
                  class="flex items-center space-x-2 bg-white rounded-full p-1.5 shadow">
                <input type="text" name="query" placeholder="Cari..." 
                       class="px-3 py-1 rounded-full text-sm focus:outline-none bg-gray-100 w-40">
                <button type="submit" 
                        class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-700">
                    Cari
                </button>
            </form>
        </div>
    </nav>

    {{-- Konten Utama --}}
    @yield('content')

</body>
</html>
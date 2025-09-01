{{-- resources/views/components/app-layout.blade.php --}}
@props(['title' => ''])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?: config('app.name', 'Laravel') }}</title>
    
    <!-- Pastikan file CSS dan JS dari Vite dipanggil -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white antialiased">

    {{-- Navigasi --}}
    @include('layouts.navigation')

    {{-- Konten utama --}}
    <main class="min-h-screen pt-16">
        {{ $slot }}
    </main>

</body>
</html>
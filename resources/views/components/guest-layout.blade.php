<!-- resources/views/components/layouts/guest-layout.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Winnicode</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-white flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-md bg-gray-800 bg-opacity-90 rounded-2xl shadow-xl p-8">
        {{ $slot }}
    </div>
</body>
</html>
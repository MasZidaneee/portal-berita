<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Winnicode Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 min-h-screen flex items-center justify-center px-4 text-white">

  <div class="w-full max-w-md bg-gray-800 bg-opacity-90 backdrop-blur-md rounded-2xl shadow-lg p-8">

    <!-- Logo & Header -->
    <div class="flex flex-col items-center mb-6">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-16 rounded-full shadow-md mb-3">
      <h2 class="text-2xl font-bold">Create Account</h2>
      <p class="text-sm text-gray-300 mt-1">Register to join Winnicode Portal</p>
    </div>

    <!-- Register Form -->
    <form method="POST" action="{{ route('register') }}" class="space-y-5">
      @csrf

      <!-- Name -->
      <div>
        <label for="name" class="block mb-1 text-sm font-medium text-gray-300">Full Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required
               class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-500 placeholder-gray-400 focus:ring-2 focus:ring-purple-500 focus:outline-none">
        @error('name') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block mb-1 text-sm font-medium text-gray-300">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required
               class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-500 placeholder-gray-400 focus:ring-2 focus:ring-purple-500 focus:outline-none">
        @error('email') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block mb-1 text-sm font-medium text-gray-300">Password</label>
        <input id="password" type="password" name="password" required
               class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-500 placeholder-gray-400 focus:ring-2 focus:ring-purple-500 focus:outline-none">
        @error('password') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="password_confirmation" class="block mb-1 text-sm font-medium text-gray-300">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required
               class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-500 placeholder-gray-400 focus:ring-2 focus:ring-purple-500 focus:outline-none">
        @error('password_confirmation') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <!-- Register Button -->
      <button type="submit"
              class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-semibold transition duration-200">
        Register
      </button>

      <!-- Login Redirect -->
      <div class="text-center mt-6 text-sm text-gray-400">
        Already have an account?
        <a href="{{ route('login') }}" class="text-purple-400 hover:underline">Login here</a>
      </div>
    </form>
  </div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Winnicode Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 min-h-screen flex items-center justify-center px-4 text-white">

  <div class="w-full max-w-md bg-gray-800 bg-opacity-90 backdrop-blur-md rounded-2xl shadow-lg p-8">
    
    <!-- Logo & Header -->
    <div class="flex flex-col items-center mb-6">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-16 rounded-full shadow-md mb-3">
      <h2 class="text-2xl font-bold">Welcome Back</h2>
      <p class="text-sm text-gray-300 mt-1">Login to your Winnicode Portal</p>
    </div>

    <!-- Error Message -->
    @if (session('error'))
      <div class="mb-4 text-red-400 font-medium text-center">
        {{ session('error') }}
      </div>
    @endif

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-5">
      @csrf

      <!-- Email -->
      <div>
        <label for="email" class="block mb-1 text-sm font-medium text-gray-300">Email address</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
               class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-500 placeholder-gray-400 focus:ring-2 focus:ring-purple-500 focus:outline-none">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block mb-1 text-sm font-medium text-gray-300">Password</label>
        <input id="password" type="password" name="password" required
               class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-gray-500 placeholder-gray-400 focus:ring-2 focus:ring-purple-500 focus:outline-none">
      </div>

      <!-- Remember & Forgot -->
      <div class="flex items-center justify-between">
        <label class="flex items-center text-sm text-gray-300">
          <input type="checkbox" name="remember" class="form-checkbox text-purple-500 bg-gray-800 border-gray-600">
          <span class="ml-2">Remember me</span>
        </label>
        <a href="{{ route('password.request') }}" class="text-sm text-purple-400 hover:underline">Forgot password?</a>
      </div>

      <!-- Submit Button -->
      <button type="submit"
              class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-semibold transition duration-200">
        Login
      </button>

      <!-- Register Prompt -->
      <div class="text-center mt-6 text-sm text-gray-400">
        Don’t have an account?
        <a href="{{ route('register') }}" class="text-purple-400 hover:underline">Register here</a>
      </div>
    </form>
  </div>

</body>
</html>
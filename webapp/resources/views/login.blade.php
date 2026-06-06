<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Nine Lives Sanctuary</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-orange-50/50 min-h-screen flex flex-col justify-between font-sans">
    
    @include('components.navigation')

    <div class="flex-grow flex items-center justify-center px-4 py-12">
        <div class="bg-white p-8 rounded-2xl shadow-xl max-w-md w-full border border-orange-100">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-gray-800">Welcome Back!</h2>
                <p class="text-gray-500 mt-2">Log in to track your rescue & adoption journey.</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded">
                    <p class="text-sm text-red-700 font-medium">Whoops! Something went wrong.</p>
                    <ul class="mt-1 list-disc list-inside text-xs text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-transparent outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" required class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-transparent outline-none transition">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center space-x-2 text-gray-600 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded border-gray-300 text-orange-500 focus:ring-orange-400">
                        <span>Remember me</span>
                    </label>
                </div>

                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-lg transition shadow-md">
                    Sign In 🐾
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-6">
                Don't have an account? <a href="{{ route('register') }}" class="text-orange-500 hover:underline font-medium">Register here</a>
            </p>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Nine Lives Sanctuary</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-orange-50/50 min-h-screen flex flex-col justify-between font-sans">

    @include('components.navigation')

    <div class="flex-grow flex items-center justify-center px-4 py-12">
        <div class="bg-white p-8 rounded-2xl shadow-xl max-w-lg w-full border border-orange-100">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-gray-800">Create an Account</h2>
                <p class="text-gray-500 mt-2">Join our sanctuary network to help local cats.</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded">
                    <ul class="list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-transparent outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-transparent outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Mahallah (Campus Residence)</label>
                        <input type="text" name="mahallah" value="{{ old('mahallah') }}" placeholder="e.g., Mahallah Salahuddin" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-transparent outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Phone Number</label>
                        <input type="text" name="phone_number" value="{{ old('phone_number') }}" placeholder="e.g., 0123456789" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-transparent outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                        <input type="password" name="password" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-transparent outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Confirm Password</label>
                        <input type="password" name="password_confirmation" required class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-transparent outline-none">
                    </div>
                </div>

                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-lg transition shadow-md mt-4">
                    Register Account 🐾
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-6">
                Already have an account? <a href="{{ route('login') }}" class="text-orange-500 hover:underline font-medium">Log in here</a>
            </p>
        </div>
    </div>
</body>
</html>
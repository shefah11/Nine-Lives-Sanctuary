<nav class="bg-white shadow-md border-b border-orange-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2 text-xl font-bold text-orange-600 tracking-wide">
                    <span>🐾 Nine Lives Sanctuary</span>
                </a>
                <div class="hidden md:flex space-x-8 ml-10">
                    <a href="#" class="text-gray-600 hover:text-orange-500 font-medium pt-1">Adopt a Cat</a>
                    <a href="#" class="text-gray-600 hover:text-orange-500 font-medium pt-1">Rescue Records</a>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                @auth
                    <span class="text-sm text-gray-500 hidden sm:inline">Hello, <strong class="text-gray-700">{{ Auth::user()->name }}</strong> ({{ ucfirst(Auth::user()->role) }})</span>
                    <a href="{{ route('profile.show') }}" class="text-gray-600 hover:text-orange-500 font-medium text-sm">Profile</a>
                    
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium shadow-sm transition">
                            Log Out
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-orange-500 font-medium text-sm">Log In</a>
                    <a href="{{ route('register') }}" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg text-sm font-medium shadow-sm transition">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
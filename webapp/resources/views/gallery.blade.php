<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nine Lives Sanctuary - Adoption Gallery</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#fcfcfc] text-[#333333] font-sans antialiased">

    <nav class="absolute top-0 left-0 w-full z-10 flex justify-between items-center px-12 py-6 bg-transparent text-white">
        <div class="text-2xl font-bold font-serif tracking-wide">Nine Lives Sanctuary</div>
        <div class="flex space-x-6 text-sm font-medium">
            <a href="#" class="hover:underline opacity-80">Home</a>
            <a href="#" class="underline font-bold">Adoption Gallery</a>
            <a href="#" class="hover:underline opacity-80">Report-A-Cat</a>
            <a href="#" class="hover:underline opacity-80">Healthcare Guide</a>
            <a href="#" class="hover:underline opacity-80">Adoption Form</a>
        </div>
    </nav>

    <header class="relative h-[450px] bg-cover bg-center flex items-center justify-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/images/emmabg.jpg');">
        <div class="border border-white px-16 py-8 text-center max-w-2xl bg-black/10 backdrop-blur-xs">
            <h1 class="text-white text-5xl font-serif tracking-wide">Adoption Gallery</h1>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 py-12">
        
        <section class="mb-16">
            <div class="text-center mb-4">
                <h2 class="text-3xl font-serif text-[#2c2c2c]">Featured Cats</h2>
                <div class="w-full border-b border-dashed border-gray-300 my-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 px-4">
                @foreach(['rocket', 'emma'] as $id)
                    @php $cat = $allCats[$id]; @endphp
                    <div class="flex flex-col items-center text-center">
                        <div class="w-full aspect-[4/3] overflow-hidden mb-4 bg-gray-100">
                            <img src="{{ $cat['images'][0] }}" alt="{{ $cat['name'] }}" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-1">{{ $cat['name'] }}</h3>
                        <p class="text-sm text-gray-600">Gender: {{ $cat['gender'] }}</p>
                        <p class="text-sm text-gray-600 mb-2">Age: {{ $cat['age'] }}</p>
                        <p class="text-sm text-gray-700 max-w-sm italic mb-4">"{{ $cat['short_desc'] }}"</p>
                        <a href="/cat-details/{{ $id }}" class="w-full bg-[#2d2d30] text-white py-2.5 text-sm font-medium tracking-wide hover:bg-[#404043] transition-colors text-center">
                            View Details
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <div class="text-center mb-4">
                <div class="w-full border-b border-dashed border-gray-300 my-6"></div>
                <h2 class="text-3xl font-serif text-[#2c2c2c] mb-6">Our Adoptable Cats</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
                @foreach(['shox', 'luke', 'oyen', 'akiff', 'wuteh', 'yoda'] as $id)
                    @php $cat = $allCats[$id]; @endphp
                    <div class="flex flex-col items-center text-center">
                        <div class="w-full aspect-square overflow-hidden mb-4 bg-gray-100">
                            <img src="{{ $cat['images'][0] }}" alt="{{ $cat['name'] }}" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-[#1a1a1a] mb-1">{{ $cat['name'] }}</h3>
                        <p class="text-sm text-gray-600">Gender: {{ $cat['gender'] }}</p>
                        <p class="text-sm text-gray-600 mb-2">Age: {{ $cat['age'] }}</p>
                        <p class="text-sm text-gray-700 max-w-xs italic mb-4">"{{ $cat['short_desc'] }}"</p>
                        <a href="/cat-details/{{ $id }}" class="w-full bg-[#2d2d30] text-white py-2 text-sm font-medium tracking-wide hover:bg-[#404043] transition-colors text-center">
                            View Details
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
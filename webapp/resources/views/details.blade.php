<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cat['name'] }} - Adoptee Details</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#fcfcfc] text-[#333333] font-sans antialiased">

    <nav class="w-full flex justify-between items-center px-12 py-6 bg-[#1a1a1a] text-white shadow-xs">
        <div class="text-2xl font-bold font-serif tracking-wide">Nine Lives Sanctuary</div>
        <div class="flex space-x-6 text-sm font-medium">
            <a href="/" class="hover:underline opacity-80">Home</a>
            <a href="/" class="underline font-bold">Adoption Gallery</a>
            <a href="#" class="hover:underline opacity-80">Report-A-Cat</a>
            <a href="#" class="hover:underline opacity-80">Healthcare Guide</a>
            <a href="#" class="hover:underline opacity-80">Adoption Form</a>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-6 bg-white py-12 my-12 shadow-xs border border-gray-100">
        
        <a href="/" class="inline-flex items-center text-sm text-gray-500 hover:text-black mb-8">
            ← Back to Gallery
        </a>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-start">
            
            <div class="md:col-span-5 flex flex-col items-center">
                <div class="relative w-full border border-blue-400 p-1 bg-white group">
                    
                    @foreach($cat['images'] as $index => $image)
                        <div class="carousel-slide {{ $index === 0 ? 'block' : 'hidden' }}">
                            <img src="{{ $image }}" alt="{{ $cat['name'] }} Image" class="w-full h-auto object-cover aspect-[4/5]">
                        </div>
                    @endforeach

                    @if(count($cat['images']) > 1)
                        <button onclick="changeSlide(-1)" class="absolute left-3 top-1/2 -translate-y-1/2 bg-black/40 text-white w-8 h-8 rounded-full flex items-center justify-center hover:bg-black/70 cursor-pointer">
                            ‹
                        </button>
                        <button onclick="changeSlide(1)" class="absolute right-3 top-1/2 -translate-y-1/2 bg-black/40 text-white w-8 h-8 rounded-full flex items-center justify-center hover:bg-black/70 cursor-pointer">
                            ›
                        </button>
                    @endif
                </div>
                
                @if(count($cat['images']) > 1)
                    <div class="flex space-x-2 mt-4">
                        @foreach($cat['images'] as $index => $image)
                            <button onclick="currentSlide({{ $index }})" class="carousel-dot w-2.5 h-2.5 rounded-full {{ $index === 0 ? 'bg-[#2d2d30]' : 'bg-gray-300' }} cursor-pointer"></button>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="md:col-span-7 pt-2">
                <h1 class="text-4xl font-serif text-[#1a1a1a] font-medium mb-6">{{ $cat['name'] }}</h1>
                
                <div class="space-y-1 text-md text-[#555555] mb-8">
                    <p>Gender: {{ $cat['gender'] }}</p>
                    <p>Age: {{ $cat['age'] }}</p>
                    <p>Adoption fee: {{ $cat['fee'] }}</p>
                </div>

                <div class="space-y-4 text-[15px] leading-relaxed text-[#2c2c2c] max-w-xl">
                    <p><strong>{{ $cat['long_desc_1'] }}</strong></p>
                    <p class="text-gray-600">{{ $cat['long_desc_2'] }}</p>
                </div>

                <div class="mt-8">
                    <a href="/adoption-form" class="inline-block w-full max-w-md bg-[#2d2d30] text-white py-3 text-sm font-medium tracking-wide hover:bg-[#404043] transition-colors text-center">
                        Apply for adoption
                    </a>
                </div>
            </div>

        </div>
    </main>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');

        function showSlide(index) {
            if (slides.length <= 1) return;
            if (index >= slides.length) { slideIndex = 0; }
            if (index < 0) { slideIndex = slides.length - 1; }

            slides.forEach(slide => slide.classList.replace('block', 'hidden'));
            if (dots.length > 0) {
                dots.forEach(dot => {
                    dot.classList.remove('bg-[#2d2d30]');
                    dot.classList.add('bg-gray-300');
                });
                dots[slideIndex].classList.remove('bg-gray-300');
                dots[slideIndex].classList.add('bg-[#2d2d30]');
            }
            slides[slideIndex].classList.replace('hidden', 'block');
        }

        function changeSlide(direction) {
            slideIndex += direction;
            showSlide(slideIndex);
        }

        function currentSlide(index) {
            slideIndex = index;
            showSlide(slideIndex);
        }
    </script>
</body>
</html>
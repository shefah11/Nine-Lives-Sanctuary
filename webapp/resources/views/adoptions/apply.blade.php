<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Form - Nine Lives Sanctuary</title>
    <!-- Tailwind CSS Script -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for matching the paw icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#ededed] text-stone-800 min-h-screen flex flex-col font-sans antialiased">

    <!-- 1. Top Black Navigation Bar -->
    <nav class="bg-black text-white px-8 py-4 flex justify-between items-center shadow-sm">
        <div class="font-bold text-sm tracking-wide">Nine Lives Sanctuary</div>
        <div class="hidden md:flex space-x-6 text-[11px] uppercase tracking-wider text-stone-300">
            <a href="#" class="hover:text-white transition-colors">Home</a>
            <a href="#" class="hover:text-white transition-colors">Adoption Gallery</a>
            <a href="#" class="hover:text-white transition-colors">Report-A-Cat</a>
            <a href="#" class="hover:text-white transition-colors">Healthcare Guide</a>
            <a href="#" class="text-white border-b border-white pb-1 font-semibold">Adoption Form</a>
        </div>
        <div class="text-stone-300 text-xs"><i class="fa-solid fa-magnifying-glass"></i></div>
    </nav>

    <!-- Content Wrapper (allows footer to sit nicely at bottom) -->
    <div class="flex-grow">
        <!-- 2. Main Hero Cat Banner with Centered Content Box -->
        <div class="relative w-full h-[320px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?q=80&w=1200&auto=format&fit=crop');">
            <!-- Dark overlay to make the white box pop -->
            <div class="absolute inset-0 bg-black/20"></div>
            
            <!-- Centered White Hero Box -->
            <div class="absolute inset-0 flex items-center justify-center px-4">
                <div class="bg-black/40 backdrop-blur-xs border border-white/40 px-12 py-8 text-center max-w-xl w-full shadow-lg">
                    <h1 class="text-4xl font-serif text-white tracking-wide mb-2">Adoption Form</h1>
                    <div class="w-16 h-[1px] bg-white mx-auto mb-3"></div>
                    <p class="text-white/90 text-xs tracking-wide leading-relaxed">We're excited to help you find your perfect feline companion.</p>
                </div>
            </div>
        </div>

        <!-- 3. Centered Content Container Area -->
        <div class="max-w-3xl mx-auto px-4 py-12 text-center bg-white mt-1 shadow-xs rounded-b-md mb-12">
            
            <h2 class="text-2xl font-serif text-stone-900 tracking-wide mb-6">Adopt a cat today!</h2>
            <div class="w-24 h-[1px] bg-stone-300 mx-auto mb-6"></div>
            
            <p class="text-stone-600 text-xs max-w-xl mx-auto leading-relaxed mb-8 font-medium">
                Thank you for your interest in adopting! Please fill in the form below so we can find the best match for you and our cats.
            </p>

            <!-- 4. Adoption Requirements Section -->
            <div class="mb-10">
                <h3 class="text-[11px] font-bold uppercase tracking-wider text-stone-900 mb-3">Adoption Requirements:</h3>
                <ul class="inline-block text-left text-xs text-stone-600 space-y-2.5 font-medium">
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-paw text-[#7c5cb4] text-xs"></i> Must be 18 years and above
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-paw text-[#7c5cb4] text-xs"></i> Must provide a safe indoor environment
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-paw text-[#7c5cb4] text-xs"></i> Commitment to proper care and regular vet visits.
                    </li>
                </ul>
            </div>

            <!-- 5. Interactive Live Embedded Google Form Container -->
            <div class="max-w-xl mx-auto bg-white border border-stone-200 rounded-lg shadow-sm mb-10 overflow-hidden">
                <iframe 
                    src="https://docs.google.com/forms/d/e/1FAIpQLSe4nygKG-gHcnE2kl-LV3t3iMDf-kBLJU5SryoXy5B3uB0G4A/viewform?embedded=true" 
                    width="100%" 
                    height="650" 
                    frameborder="0" 
                    marginheight="0" 
                    marginwidth="0"
                    class="w-full">
                    Loading form...
                </iframe>
            </div>

            <!-- 6. Bottom Timeline Roadmap Section -->
            <div class="border-t border-stone-100 pt-10 mb-6">
                <h3 class="text-[11px] font-bold uppercase tracking-wider text-stone-900 mb-4">What happens after you apply?</h3>
                <ul class="inline-block text-left text-xs text-stone-600 space-y-3 font-medium">
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-paw text-[#7c5cb4] text-xs"></i> We will review your application
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-paw text-[#7c5cb4] text-xs"></i> Shortlisted applicants will be contacted
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-paw text-[#7c5cb4] text-xs"></i> You may be invited to meet the cat
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="fa-solid fa-paw text-[#7c5cb4] text-xs"></i> Adoption will proceed after approval
                    </li>
                </ul>
            </div>

            <!-- 7. Footer Pricing Notice Disclosure -->
            <p class="text-[10px] text-stone-400 max-w-lg mx-auto leading-relaxed pt-4 border-t border-stone-100">
                *Please note: An adoption fee of RM70-RM100 is required once you have been chosen to be the new owner of the adopted cat to support rescue, medical care, and shelter for our cats.
            </p>

        </div>
    </div>

    <!-- 🌟 8. NEW DARK CONTACT FOOTER SECTION -->
    <footer class="bg-[#2d3135] text-[#b0b3b8] text-center py-6 px-4 text-sm tracking-wide mt-auto">
        <p>Call or email to report: 555-555-5555 or [ <a href="mailto:catadoptionrescue@yahoo.com" class="hover:text-white underline transition-colors">catadoptionrescue@yahoo.com</a> ]</p>
    </footer>

</body>
</html>

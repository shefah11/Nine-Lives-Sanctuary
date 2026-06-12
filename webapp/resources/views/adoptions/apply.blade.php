@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        
        <!-- Header Section -->
        <div class="bg-amber-800 text-white p-6 text-center">
            <h1 class="text-3xl font-bold">Adoption Form</h1>
            <p class="text-amber-100 mt-2">We're excited to help you find your perfect feline companion!</p>
        </div>

        <div class="p-6 md:p-8">
            <!-- Cat Brief Info -->
            <div class="flex flex-col md:flex-row items-center gap-6 bg-amber-50 p-4 rounded-xl mb-8">
                @if($cat->image)
                    <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->name }}" class="w-32 h-32 object-cover rounded-full border-4 border-amber-800 shadow">
                @endif
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">You are applying to adopt: <span class="text-amber-800">{{ $cat->name }}</span></h2>
                    <p class="text-gray-600 mt-1">Age: {{ $cat->age }} | Gender: {{ $cat->gender }}</p>
                    <span class="inline-block mt-2 px-3 py-1 bg-amber-200 text-amber-900 text-sm font-semibold rounded-full">Status: {{ $cat->status }}</span>
                </div>
            </div>

            <!-- Adoption Requirements Box -->
            <div class="border-2 border-dashed border-amber-300 rounded-xl p-5 mb-8 bg-amber-50/50">
                <h3 class="text-lg font-bold text-amber-900 mb-3 flex items-center gap-2">
                    🐾 Adoption Requirements:
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm pl-2">
                    <li class="flex items-center gap-2">✓ Must be 18 years old or older.</li>
                    <li class="flex items-center gap-2">✓ Must provide a safe indoor environment.</li>
                    <li class="flex items-center gap-2">✓ Committed to proper care and regular vet visits.</li>
                </ul>
            </div>

            <!-- Embedded Google Form Container -->
            <div class="bg-gray-100 rounded-xl p-4 shadow-inner flex flex-col items-center">
                <h4 class="text-md font-semibold text-gray-700 mb-4">Cat Adoption Application Form</h4>
                
                <!-- Paste your group's unique Google Form link inside the src="" below -->
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScXXXXXX/viewform?embedded=true" 
                        width="100%" 
                        height="600" 
                        frameborder="0" 
                        marginheight="0" 
                        marginwidth="0"
                        class="rounded-lg bg-white shadow-sm">
                    Loading…
                 iframe>
            </div>

            <!-- Post-Application Workflow Info -->
            <div class="mt-8 text-center text-sm text-gray-500 bg-gray-50 p-4 rounded-lg">
                <p class="font-semibold text-gray-700 mb-1">What happens after you apply?</p>
                <p>We will review your application ➔ Shortlisted applicants will be contacted ➔ Meet the cat ➔ Final Approval</p>
                <p class="text-xs text-amber-700 mt-2 font-medium">*Adoption processing structure fee ranges from RM70 - RM100 to support sanctuary operations.</p>
            </div>

        </div>
    </div>
</div>
@endsection

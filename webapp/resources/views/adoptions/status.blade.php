@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 border-b pb-4 mb-6">🐾 Your Adoption Application Status</h1>

        @if($userApplications->isEmpty())
            <div class="text-center py-12 text-gray-500">
                <p class="text-lg font-medium">You haven't applied to adopt any cats yet!</p>
                <a href="{{ route('cats.index') }}" class="mt-4 inline-block bg-amber-800 hover:bg-amber-900 text-white font-semibold px-5 py-2 rounded-lg shadow transition text-sm">
                    Browse Adoption Gallery
                </a>
            </div>
        @else
            <div class="space-y-4">
                @foreach($userApplications as $app)
                    <div class="border border-gray-200 rounded-xl p-5 flex flex-col sm:flex-row items-center justify-between gap-4 hover:shadow-md transition bg-gray-50">
                        <div class="flex items-center gap-4">
                            <div class="p-3 bg-amber-100 rounded-full text-amber-800 text-xl">🐱</div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-800">Application for: {{ $app->cat->name ?? 'Cat Profile' }}</h3>
                                <p class="text-xs text-gray-400">Filed on: {{ $app->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                        
                        <div>
                            @if($app->status == 'pending')
                                <span class="px-4 py-1.5 bg-yellow-100 text-yellow-800 text-xs font-bold rounded-full uppercase tracking-wider border border-yellow-300">
                                    ⏳ Processing Pending
                                </span>
                            @elseif($app->status == 'Approved')
                                <span class="px-4 py-1.5 bg-green-100 text-green-800 text-xs font-bold rounded-full uppercase tracking-wider border border-green-300">
                                    ✓ Application Approved!
                                </span>
                            @else
                                <span class="px-4 py-1.5 bg-red-100 text-red-800 text-xs font-bold rounded-full uppercase tracking-wider border border-red-300">
                                    ✕ Closed / Rejected
                                </span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection

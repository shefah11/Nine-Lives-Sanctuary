<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Application</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-stone-50 text-stone-800 p-6">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-stone-900 mb-2">Your Application Status Tracker</h1>
        <p class="text-stone-500 text-xs mb-6">See the current real-time progress updates from sanctuary admins.</p>

        <div class="space-y-3">
            @forelse($adoptions as $adopt)
                <div class="bg-white p-4 rounded-xl border border-stone-200 flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-stone-900">{{ $adopt->cat->Name ?? 'Cat' }}</h3>
                        <p class="text-xs text-stone-500">Submitted for: {{ $adopt->full_name }}</p>
                    </div>
                    <div>
                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $adopt->status === 'pending' ? 'bg-amber-100 text-amber-800' : ($adopt->status === 'approved' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800') }}">
                            {{ ucfirst($adopt->status) }}
                        </span>
                    </div>
                </div>
            @empty
                <div class="bg-white p-6 rounded-xl border border-stone-200 text-center text-xs text-stone-400"> You haven't submitted any adoption requests yet.</div>
            @endforelse
        </div>
    </div>
</body>
</html>
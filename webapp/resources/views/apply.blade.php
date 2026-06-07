<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Application</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-stone-50 text-stone-800 min-h-screen">

    <div class="bg-stone-950 text-white py-12 px-6 text-center">
        <h1 class="text-3xl font-bold tracking-tight">Cat Adoption Form</h1>
        <p class="text-stone-400 mt-1">Provide your application info below.</p>
    </div>

    <div class="max-w-4xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="space-y-4">
            <div class="bg-white p-5 rounded-xl border border-stone-200">
                <h3 class="font-bold text-stone-900 border-b pb-2 mb-2">Requirements</h3>
                <ul class="text-xs text-stone-600 space-y-2 list-disc pl-4">
                    <li>Must be 18 years or older.</li>
                    <li>Strict indoor-only habitat care rules apply.</li>
                </ul>
            </div>
            <div class="bg-amber-50 p-5 rounded-xl border border-amber-200">
                <h3 class="text-sm font-bold text-amber-900">Adoption Fee Structure</h3>
                <p class="text-2xl font-black text-amber-700">RM70 - RM100</p>
                <p class="text-[11px] text-amber-800 mt-1">Fees go directly to supporting rescue shelter logistics and operations.</p>
            </div>
        </div>

        <div class="md:col-span-2 bg-white p-6 rounded-xl border border-stone-200">
            <h2 class="text-xl font-bold text-stone-900 mb-4">Applying for: {{ $cat->Name ?? 'Selected Cat' }}</h2>

            <form action="{{ route('adoptions.store', $cat->CatID) }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-stone-700 mb-1">Full Name</label>
                    <input type="text" name="full_name" required class="w-full px-3 py-2 border border-stone-300 rounded-lg text-sm focus:outline-amber-600">
                </div>
                <div>
                    <label class="block text-xs font-bold text-stone-700 mb-1">Contact Number</label>
                    <input type="text" name="contact_number" required class="w-full px-3 py-2 border border-stone-300 rounded-lg text-sm focus:outline-amber-600">
                </div>

                <div class="bg-stone-50 p-3 rounded-lg border border-stone-200 text-[11px] text-stone-500">
                    <strong>Process Workflow Step roadmap:</strong> Form Screening ➔ Verification Call ➔ Meet & Greet ➔ Approval Signoff.
                </div>

                <button type="submit" class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg text-sm transition-colors cursor-pointer">Submit Application</button>
            </form>
        </div>
    </div>
</body>
</html>
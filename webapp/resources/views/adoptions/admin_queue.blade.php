@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-6 bg-stone-100 text-stone-800">
    <h1 class="text-2xl font-bold text-stone-900 mb-4">Admin: Adoption Request Queue</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-800 p-3 rounded-lg mb-4 text-xs">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl border border-stone-200 overflow-hidden shadow-xs">
        <table class="w-full text-left text-sm">
            <thead class="bg-stone-50 text-xs font-bold uppercase text-stone-600 border-b border-stone-200">
                <tr>
                    <th class="p-4">Applicant</th>
                    <th class="p-4">Target Cat</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-100">
                @forelse($applications as $req)
                    <tr>
                        <td class="p-4">
                            <div class="font-bold">{{ $req->user->name ?? 'Public Visitor' }}</div>
                            <div class="text-xs text-stone-500">{{ $req->user->email ?? 'No email provided' }}</div>
                        </td>
                        <td class="p-4">
                            <span class="font-semibold text-stone-900">{{ $req->cat->name ?? 'Unknown Cat' }}</span> 
                            (ID: {{ $req->cat_id }})
                        </td>
                        <td class="p-4">
                            <span class="px-2 py-0.5 rounded text-xs font-semibold {{ $req->status === 'pending' ? 'bg-amber-100 text-amber-800' : ($req->status === 'Approved' ? 'bg-green-100 text-green-800' : 'bg-stone-200 text-stone-700') }}">
                                {{ ucfirst($req->status) }}
                            </span>
                        </td>
                        <td class="p-4 text-right">
                            @if($req->status === 'pending')
                                <div class="inline-flex space-x-2 justify-end">
                                    
                                    <form action="{{ route('adoptions.update', $req->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="action" value="approve">
                                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-xs font-bold cursor-pointer transition">
                                            Approve
                                        </button>
                                    </form>

                                    <form action="{{ route('adoptions.update', $req->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="action" value="reject">
                                        <button type="submit" class="bg-stone-200 hover:bg-stone-300 text-stone-700 px-3 py-1 rounded text-xs font-bold cursor-pointer transition">
                                            Reject
                                        </button>
                                    </form>

                                </div>
                            @else
                                <span class="text-xs text-stone-400 italic">Completed</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center p-8 text-stone-400">
                            No applications found in the processing queue.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection


<div class="container py-4">
    <div class="card max-w-lg mx-auto shadow">
        <div class="card-header bg-danger text-white">🖨️ Report a Stray Cat Case</div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Spotting Location</label>
                    <input type="text" name="location" class="form-control" placeholder="e.g. Mahallah Ali Cafe" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Condition Notes</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Injured or hungry?" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Upload Picture</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <button type="submit" class="btn btn-danger w-100">Send Report</button>
            </form>
        </div>
    </div>
</div>

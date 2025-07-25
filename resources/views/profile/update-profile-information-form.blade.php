<div class="container py-5">
    <div class="mx-auto p-4 p-md-5 bg-white shadow rounded-4" style="max-width: 700px;">

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="photo" class="form-label">Profile Photo</label><br>
                <div class="mb-2">
                    <img id="preview" src="{{ auth()->user()->profile_photo_url }}" alt="Current Photo"
                         class="rounded-circle shadow-sm border" style="width: 80px; height: 80px; object-fit: cover;">
                </div>
                <input type="file" name="photo" id="photo" class="form-control" onchange="previewImage(event)">
                @error('photo')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control"
                       value="{{ old('name', auth()->user()->name) }}" required>
                @error('name')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control"
                       value="{{ old('email', auth()->user()->email) }}" required>
                @error('email')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Save Changes</button>
        </form>
    </div>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

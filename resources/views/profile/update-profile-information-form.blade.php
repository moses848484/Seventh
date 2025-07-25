<form method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <h4 class="mb-3">Update Profile Information</h4>

    <div class="mb-3">
        <label for="photo" class="form-label">Profile Photo</label>
        @if (Auth::user()->profile_photo_path)
            <div class="mb-2">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="Current photo" class="rounded-circle" style="height: 80px; width: 80px;">
            </div>
        @endif
        <input type="file" name="photo" id="photo" class="form-control">
        @error('photo')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', Auth::user()->name) }}" required>
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', Auth::user()->email) }}" required>
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

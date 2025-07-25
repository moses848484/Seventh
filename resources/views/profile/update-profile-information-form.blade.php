<div class="container py-5">

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <h2 class="h5 mb-1">{{ __('Update Profile Information') }}</h2>
    <p class="text-muted mb-4">{{ __('Update your account’s profile information and email address.') }}</p>

    {{-- Main Profile Update Form --}}
    <form method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="photo" class="form-label">Profile Photo</label><br>
            <div class="mb-2">
                <img id="preview" src="{{ auth()->user()->profile_photo_url }}" alt="Current Photo"
                    class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
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

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" id="email" class="form-control"
                value="{{ old('email', auth()->user()->email) }}" required>
            @error('email')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>
        <x-secondary-button type="submit">
            {{ __('Save Changes') }}
        </x-secondary-button>
      
    </form>

    {{-- Separate Remove Photo Form --}}
    @if (auth()->user()->profile_photo_path)
        <form method="POST" action="{{ route('profile-photo.remove') }}" class="mt-3"
            onsubmit="return confirm('Are you sure you want to remove your profile photo?');">
            @csrf
            @method('DELETE')
            <x-secondary-button type="submit">
                {{ __('Remove Photo') }}
            </x-secondary-button>
        </form>
    @endif

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
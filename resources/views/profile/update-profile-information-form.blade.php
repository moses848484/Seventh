<div class="d-flex justify-content-center">
    <div class="container-sm py-5" style="max-width: 500px;">

        <h2 class="h5 mb-1">{{ __('Update Profile Information') }}</h2>
        <p class="text-muted mb-4">{{ __('Update your account’s profile information and email address.') }}</p>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

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

            {{-- Save Changes & Remove Photo --}}
            <div class="d-flex align-items-center gap-3 mt-4">
                <x-secondary-button type="submit">
                    {{ __('Save Changes') }}
                </x-secondary-button>

                @if (auth()->user()->profile_photo_path)
                    <form method="POST" action="{{ route('profile-photo.remove') }}"
                        onsubmit="return confirm('Are you sure you want to remove your profile photo?');" class="m-0">
                        @csrf
                        @method('DELETE')
                        <x-secondary-button type="submit" class="btn-danger">
                            {{ __('Remove Photo') }}
                        </x-secondary-button>
                    </form>
                @endif
            </div>
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

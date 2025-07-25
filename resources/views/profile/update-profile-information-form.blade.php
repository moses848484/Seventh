<div class="container py-5">
    <div class="mx-auto bg-white rounded-4 shadow p-4 p-md-5" style="max-width: 700px;">
        <h2 class="h5 mb-1">{{ __('Update Profile Information') }}</h2>
        <p class="text-muted mb-4">{{ __('Update your account’s profile information and email address.') }}</p>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-3">

                <div class="col-md-6">
                    <label for="photo" class="form-label">{{ __('Profile Photo') }}</label><br>
                    <div class="mb-2">
                        <img id="preview" src="{{ auth()->user()->profile_photo_url }}" alt="Current Photo"
                             class="rounded-circle shadow-sm border" style="width: 80px; height: 80px; object-fit: cover;">
                    </div>
                    <input type="file" name="photo" id="photo" class="form-control" onchange="previewImage(event)">
                    @error('photo')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="name" class="form-label">{{ __('Full Name') }}</label>
                    <input type="text" name="name" id="name" class="form-control"
                           value="{{ old('name', auth()->user()->name) }}" required>
                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input type="email" name="email" id="email" class="form-control"
                           value="{{ old('email', auth()->user()->email) }}" required>
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4">
                @if (session('status'))
                    <span class="text-success small">{{ __('Saved.') }}</span>
                @endif

                <button type="submit" class="btn btn-primary">
                    {{ __('Save Changes') }}
                </button>
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

<form method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="photo" class="block text-sm font-medium text-gray-700">Profile Photo</label>

        @if ($user->profile_photo_path)
            <div class="mt-2">
                <img src="{{ $user->profile_photo_url }}" alt="Current photo" class="rounded-full h-20 w-20 object-cover">
            </div>
        @endif

        <input type="file" name="photo" id="photo" class="mt-2 block w-full text-sm text-gray-500
            file:me-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-indigo-50 file:text-indigo-700
            hover:file:bg-indigo-100
        ">

        @error('photo')
            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name', $user->name) }}" required>
        @error('name')
            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('email', $user->email) }}" required>
        @error('email')
            <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
            Save
        </button>
    </div>
</form>

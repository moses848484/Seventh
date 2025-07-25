<form method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <!-- Profile Photo -->
    <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
        <input type="file" id="photo" name="photo" class="hidden"
               x-ref="photo"
               accept="image/*"
               x-on:change="
                       photoName = $refs.photo.files[0].name;
                       const reader = new FileReader();
                       reader.onload = (e) => {
                           photoPreview = e.target.result;
                       };
                       reader.readAsDataURL($refs.photo.files[0]);
               " />

        <x-label for="photo" value="{{ __('Photo') }}" />

        <!-- Current Profile Photo -->
        <div class="mt-2" x-show="! photoPreview">
            <img src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}" class="rounded-full h-20 w-20 object-cover">
        </div>

        <!-- New Profile Photo Preview -->
        <div class="mt-2" x-show="photoPreview" style="display: none;">
            <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                  x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
            </span>
        </div>

        <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
            {{ __('Select A New Photo') }}
        </x-secondary-button>

        <x-input-error for="photo" class="mt-2" />
    </div>

    <!-- Name -->
    <div class="col-span-6 sm:col-span-4">
        <x-label for="name" value="{{ __('Name') }}" />
        <x-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ auth()->user()->name }}" required autocomplete="name" />
        <x-input-error for="name" class="mt-2" />
    </div>

    <!-- Email -->
    <div class="col-span-6 sm:col-span-4">
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" name="email" type="email" class="mt-1 block w-full" value="{{ auth()->user()->email }}" required autocomplete="username" />
        <x-input-error for="email" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button>
            {{ __('Save') }}
        </x-button>
    </div>
</form>
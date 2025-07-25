<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
            <a class="btn btn-outline-primary" href="/redirect">Go To Dashboard</a>
        </div>
    </x-slot>

    <div class="container py-5">
        @include('profile.update-profile-information-form')

        <x-section-border />

        @include('profile.update-password-form')

        <x-section-border />

        @include('profile.logout-other-browser-sessions-form')

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-section-border />
            @include('profile.delete-user-form')
        @endif
    </div>
</x-app-layout>

<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Jetstream;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Arr;
class UpdateProfileInformationForm extends Component
{
    use WithFileUploads;

    public $state = [];
    public $photo;
    public $user;
    public $verificationLinkSent = false;

    public function mount()
    {
        $this->user = Auth::user();
       $this->state = Arr::only($this->user->toArray(), ['name', 'email']);

    }

    public function updateProfileInformation(UpdatesUserProfileInformation $updater)
    {
        $updater->update($this->user, $this->state, $this->photo);

        if (isset($this->photo)) {
            $this->photo->storePublicly('profile-photos', ['disk' => config('jetstream.profile_photo_disk')]);

            $this->user->forceFill([
                'profile_photo_path' => $this->photo->hashName(),
            ])->save();
        }

        $this->dispatch('saved');
    }

    public function deleteProfilePhoto()
    {
        $this->user->deleteProfilePhoto();
    }

    public function sendEmailVerification()
    {
        $this->user->sendEmailVerificationNotification();

        $this->verificationLinkSent = true;
    }

    public function render()
    {
        return view('profile.update-profile-information-form');
    }
}

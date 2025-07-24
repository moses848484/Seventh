<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary; // Make sure this is at the top
class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  User  $user
     * @param  array<string, mixed>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:4096'], // Adjusted max size to 2048 KB (2 MB)
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $this->updateProfilePhoto($user, $input['photo']);
        }

        if ($input['email'] !== $user->email && $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the user's profile photo.
     *
     * @param  User  $user
     * @param  mixed  $photo
     */

protected function updateProfilePhoto(User $user, $photo): void
{
    // Optionally delete old Cloudinary image (requires storing public_id)
    // Skipped for simplicity here

    // Upload new photo to Cloudinary
    $uploaded = Cloudinary::upload($photo->getRealPath(), [
        'folder' => 'profile-photos', // Optional folder name on Cloudinary
    ]);

    $secureUrl = $uploaded->getSecurePath(); // Get the hosted image URL

    // Store the Cloudinary image URL in the database
    $user->forceFill([
        'profile_photo_path' => $secureUrl,
    ])->save();
}


    /**
     * Update the given verified user's profile information.
     *
     * @param  User  $user
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}

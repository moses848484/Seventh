<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => 'nullable|image|max:4096',
        ]);

        if ($request->hasFile('photo')) {
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }

            $path = $request->file('photo')->store('profile-photos', 'public');
            $user->profile_photo_path = $path;
        }

        if ($validated['email'] !== $user->email) {
            $user->email_verified_at = null;
            $user->sendEmailVerificationNotification();
        }

        $user->fill([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ])->save();

        return redirect()->back()->with('status', 'Profile updated successfully.');
    }
}

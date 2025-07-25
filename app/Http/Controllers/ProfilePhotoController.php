<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;

class ProfilePhotoController extends Controller
{
    public function destroy(): RedirectResponse
    {
        $user = auth()->user();

        if ($user->profile_photo_path) {
            Storage::disk('public')->delete($user->profile_photo_path);
            $user->profile_photo_path = null;
            $user->save();
        }

        return back()->with('status', 'Profile photo removed.');
    }
}
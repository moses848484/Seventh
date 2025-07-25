<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;
use Illuminate\Routing\Controller as BaseController; // Import the base Controller

/**
 * @mixin \Illuminate\Routing\MiddlewareChecks // Add this line
 */
class UpdateUserProfileInformationController extends BaseController // Extend BaseController
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }

    public function update(Request $request)
    {
        try {
            $updater = app(UpdatesUserProfileInformation::class);

            $updater->update(
                $request->user(),
                $request->all()
            );

            return redirect()->back()->with([
                'status' => 'profile-updated',
                'message' => 'Profile updated successfully!'
            ]);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors([
                'error' => 'Failed to update profile: ' . $e->getMessage()
            ]);
        }
    }
}
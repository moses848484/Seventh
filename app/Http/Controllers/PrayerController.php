<?php

namespace App\Http\Controllers;

use App\Models\Prayer;
use App\Http\Requests\PrayerRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PrayerController extends Controller
{
    /**
     * Display the prayer request form
     */
    public function index(): View
    {
        return view('prayers.create');
    }

    /**
     * Show the prayer request form
     */
    public function create(): View
    {
        return view('prayers.create');
    }

    /**
     * Store a new prayer request
     */
    public function store(PrayerRequest $request): RedirectResponse
    {
        // The validation is automatically handled by PrayerRequest
        Prayer::create($request->validated());

        return redirect()->route('prayers.thankyou')
            ->with('success', 'Your prayer request has been submitted. We will be praying for you!');
    }

    /**
     * Display thank you page
     */
    public function thankyou(): View
    {
        return view('prayers.thankyou');
    }

    /**
     * Display public prayer wall (optional feature)
     */
    public function wall(): View
    {
        $prayers = Prayer::public()
            ->recent()
            ->latest()
            ->paginate(10);

        return view('prayers.wall', compact('prayers'));
    }

    /**
     * Show specific prayer request (admin only)
     */
    public function show(Prayer $prayer): View
    {
        return view('prayers.show', compact('prayer'));
    }

    /**
     * Update prayer status (admin only)
     */
    public function updateStatus(Request $request, Prayer $prayer): RedirectResponse
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,praying,answered,closed',
            'admin_notes' => 'nullable|string',
        ]);

        if ($validated['status'] === 'praying' && !$prayer->prayed_at) {
            $validated['prayed_at'] = now();
        }

        $prayer->update($validated);

        return back()->with('success', 'Prayer status updated successfully.');
    }
}
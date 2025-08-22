<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prayer;
use App\Mail\PrayerRequestMail;
use App\Mail\PrayerAutoReplyMail;
use Illuminate\Support\Facades\Mail;

class PrayerController extends Controller
{
    /**
     * Show the form for creating a new prayer request.
     */
    public function create()
    {
         return view('prayer.create');
    }

    /**
     * Store a newly created prayer request in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'nullable|email|max:255',
            'phone'          => 'nullable|string|max:20',
            'request_type'   => 'required|string|max:100',
            'prayer_request' => 'required|string',
            'is_urgent'      => 'nullable|boolean',
            'is_private'     => 'nullable|boolean',
        ]);

        $validated['status'] = 'pending'; // default

        // Save prayer request
        Prayer::create($validated);

        // Send notification email to admin
        Mail::to('moses.blake.simataa@gmail.com')->send(new PrayerRequestMail($validated));

        // Send auto-reply to requester if email provided
        if (!empty($validated['email'])) {
            Mail::to($validated['email'])->send(new PrayerAutoReplyMail($validated));
        }

        return redirect()->route('prayer.thankyou')->with('success', 'Thank you for your prayer request! We will be praying for you.');
    }

    /**
     * Thank you page after submission.
     */
    public function thankyou()
    {
         return view('prayer.thankyou');
    }

    /**
     * Public prayer wall page.
     */
    public function wall()
    {
        $prayers = Prayer::where('is_private', false)
            ->where('status', 'approved')
            ->latest()
            ->get();

         return view('prayer.wall', compact('prayers'));
    }
}
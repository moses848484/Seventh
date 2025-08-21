<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prayer;

class PrayerController extends Controller
{
    /**
     * Display a listing of the prayers (if needed).
     */
    public function index()
    {
        $prayers = Prayer::latest()->get();
        return view('home.index', compact('prayers')); 
        // adjust if your index file has a different name
    }

    /**
     * Show the form for creating a new prayer request.
     */
    public function create()
    {
        return view('home.create'); // FIXED path
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

        Prayer::create($validated);

        return redirect()->route('prayers.thankyou');
    }

    /**
     * Thank you page after submission.
     */
    public function thankyou()
    {
        return view('home.thankyou'); // FIXED path
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

        return view('home.wall', compact('prayers')); // FIXED path
    }
}

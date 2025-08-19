<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prayer;

class PrayerController extends Controller
{
    public function prayerRequest()
    {
        return view('home.prayers', [
        ]);
    }

    public function submitPrayerForm(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
            'newsletter' => 'nullable|boolean',
        ]);

        // Save
        Contact::create($validated);

        // Notify admin
        Mail::to('moses.blake.simataa@gmail.com')->send(new ContactFormMail($validated));

        // Auto-reply
        Mail::to($validated['email'])->send(new ContactAutoReplyMail($validated));

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}

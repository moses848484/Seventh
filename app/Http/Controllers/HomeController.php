<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Givings;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.userpage');
    }

    // Add this method for What to Expect page
    public function whatToExpect()
    {
        return view('home.what-to-expect');
    }

    public function whoWeAre()
    {
        return view('home.who-we-are');
    }
    public function contactUs()
    {
        return view('home.contact-us');
    }
    public function ourBeliefs()
    {
        return view('home.our-beliefs');
    }

    public function connectWithOurTeam()
    {
        return view('home.connect-with-our-team');
    }

    public function prayerRequest()
    {
        return view('home.prayer-request');
    }

    public function attendOnline()
    {
        return view('home.attend-online');
    }

    public function giveGod()
    {
        return view('home.give-god');
    }

    public function submitContactForm(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
            'newsletter' => 'nullable|boolean'
        ]);

        // Here you can:
        // 1. Save to database
        // 2. Send email notification
        // 3. Send auto-response email

        // 2. Save to DB (Contact model must exist)
        Contact::create($validated);

        // 3. Send notification email (optional)
        Mail::to('moses.blake.simataa@gmail.com')->send(new ContactFormMail($validated));

        // Auto-reply to user
        Mail::to($validated['email'])->send(new ContactAutoReplyMail($validated));

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function redirect()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            $users = User::all();
            $userCount = User::count();
            $data = members::all();
            $memberCount = members::count();
            $membersCount = members::where('registeras', 'member')->count();
            $visitorCount = members::where('registeras', 'visitor')->count();
            $singlesCount = members::where('marital', 'single')->count();
            $marriedCount = members::where('marital', 'married')->count();
            $divorcedCount = members::where('marital', 'divorced')->count();

            // Show welcome notification only once per session
            $welcomeKey = 'welcomed_user_' . Auth::id();
            if (!session()->has($welcomeKey)) {
                $user = Auth::user();
                notify()->success('Welcome, ' . $user->name . '!');
                session([$welcomeKey => true]);
            }

            return view('admin.home', [
                'data' => $data,
                'users' => $users,
                'userCount' => $userCount,
                'memberCount' => $memberCount,
                'membersCount' => $membersCount,
                'visitorCount' => $visitorCount,
                'singlesCount' => $singlesCount,
                'marriedCount' => $marriedCount,
                'divorcedCount' => $divorcedCount
            ]);
        } else {
            // Show welcome notification only once per session
            $welcomeKey = 'welcomed_user_' . Auth::id();
            if (!session()->has($welcomeKey)) {
                $user = Auth::user();
                notify()->success('Welcome, ' . $user->name . '!');
                session([$welcomeKey => true]);
            }

            return view('home.memberhome');
        }
    }

    public function redirected()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            $users = User::all();
            $userCount = User::count();
            $data = members::all();
            $memberCount = members::count();
            $membersCount = members::where('registeras', 'member')->count();
            $visitorCount = members::where('registeras', 'visitor')->count();
            $singlesCount = members::where('marital', 'single')->count();
            $marriedCount = members::where('marital', 'married')->count();
            $divorcedCount = members::where('marital', 'divorced')->count();

            return view('admin.home', [
                'data' => $data,
                'users' => $users,
                'userCount' => $userCount,
                'memberCount' => $memberCount,
                'membersCount' => $membersCount,
                'visitorCount' => $visitorCount,
                'singlesCount' => $singlesCount,
                'marriedCount' => $marriedCount,
                'divorcedCount' => $divorcedCount
            ]);
        } else {
            return view('home.memberhome');
        }
    }

    public function member_registration()
    {
        return view('home.members');
    }

    public function update_account()
    {
        $data = Members::all();
        return view('home.update', compact('data'));
    }

    public function member_givings()
    {
        return view('home.givings');
    }

    /**
     * Clear welcome session when user logs out
     * Add this method and call it from your logout process
     */
    public function clearWelcomeSession()
    {
        $welcomeKey = 'welcomed_user_' . Auth::id();
        session()->forget($welcomeKey);
    }
}
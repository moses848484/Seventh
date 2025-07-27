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
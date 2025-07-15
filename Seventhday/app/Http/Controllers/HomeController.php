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
            return redirect()->route('login'); // Redirect to login if not authenticated
        }

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            $users = User::all();
            $userCount = User::count(); // Count the number of users
            $data = members::all();
            $memberCount = members::count(); // Count the number of members
            $membersCount = members::where('registeras', 'member')->count(); // Count the number of members
            $visitorCount = members::where('registeras', 'visitor')->count(); // Count the number of visitors
            $singlesCount = members::where('marital', 'single')->count(); // Count the number of single people
            $marriedCount = members::where('marital', 'married')->count(); // Count the number of married people
            $divorcedCount = members::where('marital', 'divorced')->count(); // Count the number of divorced people
            // Pass the data and member count to the admin.home view
            $user = Auth::user();
            notify()->success('Welcome, ' . $user->name . '!');
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
            // Redirect to home.userpage view for regular users
            $user = Auth::user();
            notify()->success('Welcome, ' . $user->name . '!');
            return view('home.memberhome');
        }
    }

    public function redirected()
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login if not authenticated
        }

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            $users = User::all();
            $userCount = User::count(); // Count the number of users
            $data = members::all();
            $memberCount = members::count(); // Count the number of members
            $membersCount = members::where('registeras', 'member')->count(); // Count the number of members
            $visitorCount = members::where('registeras', 'visitor')->count(); // Count the number of visitors             
            $singlesCount = members::where('marital', 'single')->count(); // Count the number of single people
            $marriedCount = members::where('marital', 'married')->count(); // Count the number of married people
            $divorcedCount = members::where('marital', 'divorced')->count(); // Count the number of divorced people
            // Pass the data and member count to the admin.home view

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
            // Redirect to home.memberhome view for regular users
            return view('home.memberhome');
        }
    }

    public function member_registration()
    {
        return view('home.members');
    }

    public function update_account()
    {
        $data = Members::all(); // Fetch all members
        return view('home.update', compact('data')); // Pass data to the view
    }



    public function member_givings()
    {
        return view('home.givings');
    }

}

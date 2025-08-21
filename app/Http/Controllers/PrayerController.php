<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prayer;
use Illuminate\Support\Facades\Validator;

class PrayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prayers = Prayer::orderBy('created_at', 'desc')->paginate(10);
        return view('prayers.index', compact('prayers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prayers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'request_type' => 'required|string|in:personal,family,health,financial,spiritual,other',
            'prayer_request' => 'required|string|min:10|max:2000',
            'is_urgent' => 'boolean',
            'is_private' => 'boolean'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            Prayer::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'request_type' => $request->request_type,
                'prayer_request' => $request->prayer_request,
                'is_urgent' => $request->has('is_urgent') ? 1 : 0,
                'is_private' => $request->has('is_private') ? 1 : 0,
                'status' => 'pending'
            ]);

            return redirect()->route('prayers.thankyou')->with('success', 'Your prayer request has been submitted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'There was an error submitting your prayer request. Please try again.')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Prayer $prayer)
    {
        return view('prayers.show', compact('prayer'));
    }

    /**
     * Show the thank you page.
     */
    public function thankyou()
    {
        return view('prayers.thankyou');
    }

    /**
     * Show the prayer wall (public prayers).
     */
    public function wall()
    {
        $prayers = Prayer::where('is_private', 0)
                        ->where('status', 'approved')
                        ->orderBy('created_at', 'desc')
                        ->paginate(12);
        
        return view('prayers.wall', compact('prayers'));
    }

    /**
     * Update the status of a prayer request.
     */
    public function updateStatus(Request $request, Prayer $prayer)
    {
        $request->validate([
            'status' => 'required|string|in:pending,approved,answered,archived'
        ]);

        $prayer->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Prayer status updated successfully!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LocationController extends Controller
{
    private $locations = [
        'unza-campus' => [
            'name' => 'UNZA Great East Road Campus',
            'slug' => 'unza-campus',
            'address' => 'Great East Road, University of Zambia, Lusaka, Zambia',
            'coordinates' => [
                'lat' => -15.3875,
                'lng' => 28.3228
            ],
            'service_times' => [
                'Sunday' => '09:00 AM & 11:00 AM',
                'Wednesday' => '06:00 PM'
            ],
            'contact' => [
                'phone' => '+260 97 123 4567',
                'email' => 'unza@church.zm'
            ],
            'description' => 'Our main campus located at the University of Zambia, serving students and the community.'
        ],
        'olympia-church' => [
            'name' => 'Katima Mulilo Road Olympia Church',
            'slug' => 'olympia-church',
            'address' => 'Katima Mulilo Road, Olympia, Lusaka, Zambia',
            'coordinates' => [
                'lat' => -15.3946,
                'lng' => 28.2853
            ],
            'service_times' => [
                'Sunday' => '08:30 AM & 10:30 AM',
                'Thursday' => '06:00 PM'
            ],
            'contact' => [
                'phone' => '+260 97 234 5678',
                'email' => 'olympia@church.zm'
            ],
            'description' => 'A vibrant community church serving the Olympia area and surrounding neighborhoods.'
        ],
        'online' => [
            'name' => 'Online Service',
            'slug' => 'online',
            'address' => 'Available worldwide via live stream',
            'coordinates' => null, // No physical location
            'service_times' => [
                'Sunday' => '09:00 AM & 11:00 AM (CAT)',
                'Wednesday' => '06:00 PM (CAT)'
            ],
            'contact' => [
                'phone' => '+260 97 123 4567',
                'email' => 'online@church.zm',
                'streaming_url' => 'https://church.zm/live'
            ],
            'description' => 'Join us online from anywhere in the world for our live-streamed services.'
        ]
    ];

    public function index()
    {
        return view('locations.index', ['locations' => $this->locations]);
    }

    public function show($slug)
    {
        $location = $this->locations[$slug] ?? null;
        
        if (!$location) {
            abort(404, 'Location not found');
        }

        return view('locations.show', ['location' => $location]);
    }

    public function getLocationData($slug): JsonResponse
    {
        $location = $this->locations[$slug] ?? null;
        
        if (!$location) {
            return response()->json(['error' => 'Location not found'], 404);
        }

        return response()->json($location);
    }
}
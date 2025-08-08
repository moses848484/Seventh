@extends('layouts.app')

@section('title', $location['name'])

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@section('content')
<div class="container py-5">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('locations.index') }}">Locations</a></li>
                    <li class="breadcrumb-item active">{{ $location['name'] }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-3 mb-3">{{ $location['name'] }}</h1>
            <p class="lead text-muted">{{ $location['description'] }}</p>
        </div>
    </div>

    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8 mb-4">
            <!-- Location Details Card -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0"><i class="bi bi-building"></i> Campus Information</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5><i class="bi bi-geo-alt text-danger"></i> Address</h5>
                            <p>{{ $location['address'] }}</p>
                            
                            <h5><i class="bi bi-clock text-primary"></i> Service Times</h5>
                            <ul class="list-unstyled">
                                @foreach($location['service_times'] as $day => $time)
                                <li><strong>{{ $day }}:</strong> {{ $time }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="col-md-6">
                            <h5><i class="bi bi-telephone text-success"></i> Contact</h5>
                            <p>
                                <strong>Phone:</strong> <a href="tel:{{ $location['contact']['phone'] }}">{{ $location['contact']['phone'] }}</a><br>
                                <strong>Email:</strong> <a href="mailto:{{ $location['contact']['email'] }}">{{ $location['contact']['email'] }}</a>
                            </p>
                            
                            <h5><i class="bi bi-people text-info"></i> Community</h5>
                            <p>University students, faculty, and local residents</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Card -->
            @if($location['coordinates'])
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0"><i class="bi bi-map"></i> Location Map</h4>
                </div>
                <div class="card-body">
                    <div id="map" style="height: 400px; border-radius: 8px;"></div>
                </div>
            </div>
            @else
            <div class="alert alert-info">
                <i class="bi bi-laptop"></i> This is an online service - no physical location
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Quick Actions -->
            @if($location['coordinates'])
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <a href="https://www.google.com/maps/dir/?api=1&destination={{ $location['coordinates']['lat'] }},{{ $location['coordinates']['lng'] }}" 
                       target="_blank" class="btn btn-primary btn-block mb-2">
                        <i class="bi bi-navigation"></i> Get Directions
                    </a>
                    
                    <a href="tel:{{ $location['contact']['phone'] }}" class="btn btn-success btn-block mb-2">
                        <i class="bi bi-telephone"></i> Call Location
                    </a>
                    
                    <a href="mailto:{{ $location['contact']['email'] }}" class="btn btn-info btn-block mb-2">
                        <i class="bi bi-envelope"></i> Send Email
                    </a>

                    @if(isset($location['contact']['streaming_url']))
                    <a href="{{ $location['contact']['streaming_url'] }}" target="_blank" class="btn btn-warning btn-block mb-2">
                        <i class="bi bi-play-circle"></i> Watch Live
                    </a>
                    @endif
                </div>
            </div>
            @endif

            <!-- Campus Features -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Campus Features</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success"></i> Parking Available</li>
                        <li><i class="bi bi-check-circle text-success"></i> Student Ministry</li>
                        <li><i class="bi bi-check-circle text-success"></i> Bible Study Groups</li>
                        <li><i class="bi bi-check-circle text-success"></i> Youth Programs</li>
                        <li><i class="bi bi-check-circle text-success"></i> Campus Outreach</li>
                    </ul>
                </div>
            </div>

            <!-- Other Locations -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Other Locations</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('locations.show', 'olympia-church') }}" class="btn btn-outline-secondary btn-block mb-2">
                        Olympia Church
                    </a>
                    <a href="{{ route('locations.show', 'online') }}" class="btn btn-outline-secondary btn-block">
                        Online Service
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@if($location['coordinates'])
<script>
    // Initialize map
    const map = L.map('map').setView([{{ $location['coordinates']['lat'] }}, {{ $location['coordinates']['lng'] }}], 16);
    
    // Add tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
    
    // Add marker
    const marker = L.marker([{{ $location['coordinates']['lat'] }}, {{ $location['coordinates']['lng'] }}])
        .addTo(map)
        .bindPopup(`
            <div style="text-align: center; min-width: 200px;">
                <h6><strong>{{ $location['name'] }}</strong></h6>
                <p style="margin: 5px 0; color: #666;">{{ $location['address'] }}</p>
                <hr style="margin: 10px 0;">
                @foreach($location['service_times'] as $day => $time)
                <small><strong>{{ $day }}:</strong> {{ $time }}<br>
                @endforeach
            </div>
        `)
        .openPopup();
</script>
@endif
@endpush
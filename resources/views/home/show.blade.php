@extends('layouts.app')

@section('title', $location['name'])

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@section('content')
<div class="container py-5">
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
    
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0">{{ $location['name'] }}</h2>
                </div>
                
                <div class="card-body">
                    <p class="text-muted mb-4">{{ $location['description'] }}</p>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h5><i class="bi bi-geo-alt"></i> Address</h5>
                            <p>{{ $location['address'] }}</p>
                            
                            @if($location['coordinates'])
                            <div id="map" style="height: 300px; border-radius: 8px;" class="mb-3"></div>
                            @else
                            <div class="alert alert-info">
                                <i class="bi bi-laptop"></i> This is an online service - no physical location
                            </div>
                            @endif
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <h5><i class="bi bi-clock"></i> Service Times</h5>
                            @foreach($location['service_times'] as $day => $time)
                            <p class="mb-1"><strong>{{ $day }}:</strong> {{ $time }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-telephone"></i> Contact Information</h5>
                </div>
                
                <div class="card-body">
                    <p><strong>Phone:</strong><br>
                    <a href="tel:{{ $location['contact']['phone'] }}">{{ $location['contact']['phone'] }}</a></p>
                    
                    <p><strong>Email:</strong><br>
                    <a href="mailto:{{ $location['contact']['email'] }}">{{ $location['contact']['email'] }}</a></p>
                    
                    @if(isset($location['contact']['streaming_url']))
                    <p><strong>Live Stream:</strong><br>
                    <a href="{{ $location['contact']['streaming_url'] }}" target="_blank" class="btn btn-primary btn-sm">
                        <i class="bi bi-play-circle"></i> Watch Online
                    </a></p>
                    @endif
                </div>
            </div>
            
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-info-circle"></i> Getting Here</h5>
                </div>
                
                <div class="card-body">
                    @if($location['coordinates'])
                    <p class="mb-2">
                        <a href="https://www.google.com/maps/dir/?api=1&destination={{ $location['coordinates']['lat'] }},{{ $location['coordinates']['lng'] }}" 
                           target="_blank" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-map"></i> Get Directions
                        </a>
                    </p>
                    
                    <p class="mb-2">
                        <a href="https://maps.apple.com/?daddr={{ $location['coordinates']['lat'] }},{{ $location['coordinates']['lng'] }}" 
                           target="_blank" class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-apple"></i> Apple Maps
                        </a>
                    </p>
                    @else
                    <p>No directions needed - join us online from anywhere!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12 text-center">
            <a href="{{ route('locations.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back to All Locations
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@if($location['coordinates'])
<script>
    // Initialize map
    const map = L.map('map').setView([{{ $location['coordinates']['lat'] }}, {{ $location['coordinates']['lng'] }}], 15);
    
    // Add tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
    
    // Add marker
    const marker = L.marker([{{ $location['coordinates']['lat'] }}, {{ $location['coordinates']['lng'] }}])
        .addTo(map)
        .bindPopup(`
            <div style="text-align: center;">
                <h6><strong>{{ $location['name'] }}</strong></h6>
                <p style="margin: 5px 0; color: #666;">{{ $location['address'] }}</p>
            </div>
        `)
        .openPopup();
</script>
@endif
@endpush
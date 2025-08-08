@extends('layouts.app')

@section('title', 'Katima Mulilo Road Olympia Church')

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
                    <li class="breadcrumb-item active">Olympia Church</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-3 mb-3">Katima Mulilo Road Olympia Church</h1>
            <p class="lead text-muted">A vibrant community church serving the Olympia area and surrounding neighborhoods</p>
        </div>
    </div>

    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8 mb-4">
            <!-- Location Details Card -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0"><i class="bi bi-house-heart"></i> Church Information</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5><i class="bi bi-geo-alt text-danger"></i> Address</h5>
                            <p>Katima Mulilo Road<br>
                            Olympia Area<br>
                            Lusaka, Zambia</p>
                            
                            <h5><i class="bi bi-clock text-primary"></i> Service Times</h5>
                            <ul class="list-unstyled">
                                <li><strong>Sunday:</strong> 08:30 AM & 10:30 AM</li>
                                <li><strong>Thursday:</strong> 06:00 PM</li>
                            </ul>
                        </div>
                        
                        <div class="col-md-6">
                            <h5><i class="bi bi-telephone text-success"></i> Contact</h5>
                            <p>
                                <strong>Phone:</strong> <a href="tel:+260972345678">+260 97 234 5678</a><br>
                                <strong>Email:</strong> <a href="mailto:olympia@church.zm">olympia@church.zm</a>
                            </p>
                            
                            <h5><i class="bi bi-people text-info"></i> Community</h5>
                            <p>Families, professionals, and local residents</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Card -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0"><i class="bi bi-map"></i> Location Map</h4>
                </div>
                <div class="card-body">
                    <div id="map" style="height: 400px; border-radius: 8px;"></div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Quick Actions -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <a href="https://www.google.com/maps/dir/?api=1&destination=-15.3946,28.2853" 
                       target="_blank" class="btn btn-primary btn-block mb-2">
                        <i class="bi bi-navigation"></i> Get Directions
                    </a>
                    
                    <a href="tel:+260972345678" class="btn btn-success btn-block mb-2">
                        <i class="bi bi-telephone"></i> Call Church
                    </a>
                    
                    <a href="mailto:olympia@church.zm" class="btn btn-info btn-block mb-2">
                        <i class="bi bi-envelope"></i> Send Email
                    </a>
                </div>
            </div>

            <!-- Church Features -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Church Features</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success"></i> Family Ministry</li>
                        <li><i class="bi bi-check-circle text-success"></i> Children's Programs</li>
                        <li><i class="bi bi-check-circle text-success"></i> Small Groups</li>
                        <li><i class="bi bi-check-circle text-success"></i> Community Outreach</li>
                        <li><i class="bi bi-check-circle text-success"></i> Worship Team</li>
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
<script>
    // Initialize map centered on UNZA campus
    const map = L.map('map').setView([-15.3875, 28.3228], 16);
    
    // Add tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
    
    // Add marker for UNZA campus
    const marker = L.marker([-15.3875, 28.3228])
        .addTo(map)
        .bindPopup(`
            <div style="text-align: center; min-width: 200px;">
                <h6><strong>UNZA Great East Road Campus</strong></h6>
                <p style="margin: 5px 0; color: #666;">Great East Road, University of Zambia</p>
                <hr style="margin: 10px 0;">
                <small><strong>Sunday:</strong> 09:00 AM & 11:00 AM<br>
                <strong>Wednesday:</strong> 06:00 PM</small>
            </div>
        `)
        .openPopup();
</script>
@endpush
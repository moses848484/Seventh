@extends('layouts.app')

@section('title', 'Online Service')

@section('content')
<div class="container py-5">
    <!-- Breadcrumb -->
    <div class="row">
        <div class="col-12 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('locations.index') }}">Locations</a></li>
                    <li class="breadcrumb-item active">Online Service</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-3 mb-3"><i class="bi bi-laptop text-primary"></i> Online Service</h1>
            <p class="lead text-muted">Join us from anywhere in the world for our live-streamed services</p>
        </div>
    </div>

    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8 mb-4">
            <!-- Live Stream Card -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0"><i class="bi bi-broadcast"></i> Live Stream</h3>
                </div>
                <div class="card-body text-center">
                    <div class="ratio ratio-16x9 mb-3">
                        <div class="bg-light d-flex align-items-center justify-content-center border rounded">
                            <div class="text-center text-muted">
                                <i class="bi bi-play-circle" style="font-size: 4rem;"></i>
                                <h4 class="mt-3">Live Stream Portal</h4>
                                <p>Services stream live here during service times</p>
                                <a href="https://church.zm/live" target="_blank" class="btn btn-primary">
                                    <i class="bi bi-broadcast"></i> Watch Live Stream
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h4 class="mb-0"><i class="bi bi-info-circle"></i> Online Service Details</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5><i class="bi bi-clock text-primary"></i> Service Times (CAT)</h5>
                            <ul class="list-unstyled">
                                <li><strong>Sunday:</strong> 09:00 AM & 11:00 AM</li>
                                <li><strong>Wednesday:</strong> 06:00 PM</li>
                            </ul>
                            
                            <h5><i class="bi bi-globe text-info"></i> Accessibility</h5>
                            <p>Available worldwide with internet connection</p>
                        </div>
                        
                        <div class="col-md-6">
                            <h5><i class="bi bi-telephone text-success"></i> Support</h5>
                            <p>
                                <strong>Phone:</strong> <a href="tel:+260971234567">+260 97 123 4567</a><br>
                                <strong>Email:</strong> <a href="mailto:online@church.zm">online@church.zm</a><br>
                                <strong>Stream:</strong> <a href="https://church.zm/live" target="_blank">church.zm/live</a>
                            </p>
                            
                            <h5><i class="bi bi-chat-dots text-warning"></i> Interaction</h5>
                            <p>Live chat available during services</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How to Join -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0"><i class="bi bi-question-circle"></i> How to Join Online</h4>
                </div>
                <div class="card-body">
                    <ol>
                        <li class="mb-2"><strong>Visit our stream page</strong> at <a href="https://church.zm/live" target="_blank">church.zm/live</a></li>
                        <li class="mb-2"><strong>Test your connection</strong> 5 minutes before service starts</li>
                        <li class="mb-2"><strong>Join the chat</strong> to connect with other online attendees</li>
                        <li class="mb-2"><strong>Participate</strong> through chat prayers and digital offerings</li>
                        <li><strong>Stay connected</strong> through our social media and email updates</li>
                    </ol>
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
                    <a href="https://church.zm/live" target="_blank" class="btn btn-primary btn-block mb-2">
                        <i class="bi bi-play-circle"></i> Watch Live Stream
                    </a>
                    
                    <a href="tel:+260971234567" class="btn btn-success btn-block mb-2">
                        <i class="bi bi-telephone"></i> Call Support
                    </a>
                    
                    <a href="mailto:online@church.zm" class="btn btn-info btn-block mb-2">
                        <i class="bi bi-envelope"></i> Email Support
                    </a>
                </div>
            </div>

            <!-- Online Features -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Online Features</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-success"></i> HD Live Streaming</li>
                        <li><i class="bi bi-check-circle text-success"></i> Interactive Chat</li>
                        <li><i class="bi bi-check-circle text-success"></i> Digital Offerings</li>
                        <li><i class="bi bi-check-circle text-success"></i> Service Archives</li>
                        <li><i class="bi bi-check-circle text-success"></i> Prayer Requests</li>
                        <li><i class="bi bi-check-circle text-success"></i> Mobile Friendly</li>
                    </ul>
                </div>
            </div>

            <!-- Technical Requirements -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Technical Requirements</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li><i class="bi bi-wifi text-primary"></i> Stable internet connection</li>
                        <li><i class="bi bi-laptop text-secondary"></i> Computer, tablet, or smartphone</li>
                        <li><i class="bi bi-volume-up text-info"></i> Speakers or headphones</li>
                        <li><i class="bi bi-camera-video text-warning"></i> Optional: webcam for prayer</li>
                    </ul>
                </div>
            </div>

            <!-- Physical Locations -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Visit Us in Person</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('locations.show', 'unza-campus') }}" class="btn btn-outline-secondary btn-block mb-2">
                        <i class="bi bi-building"></i> UNZA Campus
                    </a>
                    <a href="{{ route('locations.show', 'olympia-church') }}" class="btn btn-outline-secondary btn-block">
                        <i class="bi bi-house-heart"></i> Olympia Church
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
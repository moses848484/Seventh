@extends('layouts.app')

@section('title', 'Our Locations')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h1 class="display-4 mb-3">Our Locations</h1>
            <p class="lead text-muted">Find a church location near you or join us online</p>
        </div>
    </div>
    
    <div class="row">
        @foreach($locations as $slug => $location)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $location['name'] }}</h5>
                    <p class="card-text text-muted">{{ $location['address'] }}</p>
                    
                    @if($location['coordinates'])
                    <div class="mb-3">
                        <small class="text-muted">
                            <i class="bi bi-geo-alt"></i> 
                            Lat: {{ $location['coordinates']['lat'] }}, 
                            Lng: {{ $location['coordinates']['lng'] }}
                        </small>
                    </div>
                    @endif
                    
                    <div class="mb-3">
                        <h6>Service Times:</h6>
                        @foreach($location['service_times'] as $day => $time)
                        <small class="d-block"><strong>{{ $day }}:</strong> {{ $time }}</small>
                        @endforeach
                    </div>
                    
                    <div class="mb-3">
                        <h6>Contact:</h6>
                        <small class="d-block">{{ $location['contact']['phone'] }}</small>
                        <small class="d-block">{{ $location['contact']['email'] }}</small>
                        @if(isset($location['contact']['streaming_url']))
                        <small class="d-block">
                            <a href="{{ $location['contact']['streaming_url'] }}" target="_blank">Watch Live Stream</a>
                        </small>
                        @endif
                    </div>
                </div>
                
                <div class="card-footer">
                    <a href="{{ route('locations.show', $slug) }}" class="btn btn-primary btn-sm">
                        View Details & Map
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
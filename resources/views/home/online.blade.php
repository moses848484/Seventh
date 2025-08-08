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
                        <div class="bg-light d-flex align-items-center justify-content-
@extends('layouts.app')

@section('title', 'Infrastructure - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">Infrastruktur</h1>
                    <p class="lead">Teknologi dan infrastruktur yang mendukung layanan kami</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($infrastructures as $infra)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100 text-center">
                        <div class="card-body p-4">
                            <i class="{{ $infra['icon'] }} text-primary display-4 mb-3"></i>
                            <h4 class="card-title">{{ $infra['title'] }}</h4>
                            <p class="card-text text-muted">{{ $infra['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <h2 class="display-4 fw-bold">99.9%</h2>
                    <p class="text-muted">Uptime</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h2 class="display-4 fw-bold">50+</h2>
                    <p class="text-muted">Server</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h2 class="display-4 fw-bold">1TB+</h2>
                    <p class="text-muted">Storage</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h2 class="display-4 fw-bold">24/7</h2>
                    <p class="text-muted">Support</p>
                </div>
            </div>
        </div>
    </section>
@endsection

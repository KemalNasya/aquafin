@extends('layouts.app')

@section('title', 'Gallery - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">Gallery</h1>
                    <p class="lead">Koleksi foto lengkap dari semua kegiatan dan event perusahaan kami</p>

                    <!-- Search Bar -->
                    <div class="mt-4">
                        <form action="{{ route('gallery') }}" method="GET">
                            <div class="input-group input-group-lg">
                                <input type="text" name="q" class="form-control" placeholder="Cari galeri..." aria-label="Search gallery">
                                <button class="btn btn-light" type="submit">
                                    <i class="bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Photos -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h6 class="fw-bold mb-3">Foto Terbaru</h6>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach($recentPhotos as $photo)
                        <a href="#" class="badge bg-white text-dark border p-2 text-decoration-none">
                            <i class="{{ $photo['icon'] }} me-1"></i>
                            {{ $photo['title'] }}
                            <small class="text-muted ms-2">{{ $photo['date'] }}</small>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Gallery Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Sidebar Navigation -->
                    <div class="sticky-top" style="top: 100px;">
                        <h6 class="fw-bold mb-3">Kategori Galeri</h6>
                        <nav class="nav flex-column">
                            @foreach($categories as $category)
                            <a class="nav-link text-dark mb-2" href="#category-{{ Str::slug($category['name']) }}">
                                <i class="{{ $category['icon'] }} text-{{ $category['color'] }} me-2"></i>
                                {{ $category['name'] }}
                            </a>
                            @endforeach
                        </nav>

                        <hr class="my-4">

                        <h6 class="fw-bold mb-3">Quick Links</h6>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-outline-primary btn-sm">
                                <i class="bi-camera me-1"></i> Upload Foto
                            </a>
                            <a href="#" class="btn btn-outline-secondary btn-sm">
                                <i class="bi-share me-1"></i> Bagikan
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <!-- Gallery Categories -->
                    @foreach($categories as $category)
                    <div id="category-{{ Str::slug($category['name']) }}" class="gallery-category mb-5">
                        <div class="d-flex align-items-center mb-4">
                            <i class="{{ $category['icon'] }} text-{{ $category['color'] }} display-6 me-3"></i>
                            <div>
                                <h3 class="fw-bold mb-1">{{ $category['name'] }}</h3>
                                <p class="text-muted mb-0">{{ count($category['photos']) }} foto tersedia</p>
                            </div>
                        </div>

                        <div class="row">
                            @foreach($category['photos'] as $photo)
                            <div class="col-md-4 mb-4">
                                <div class="card border-0 shadow-sm h-100 gallery-card">
                                    <div class="card-img-container">
                                        <img src="{{ $photo['image'] }}" class="card-img-top" alt="{{ $photo['title'] }}">
                                        <div class="card-img-overlay d-flex align-items-end">
                                            <div class="w-100">
                                                <h6 class="card-title text-white fw-bold mb-1">{{ $photo['title'] }}</h6>
                                                <small class="text-white-50">{{ $photo['date'] }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text text-muted small">{{ $photo['description'] }}</p>

                                        <div class="photo-meta mb-3">
                                            <small class="text-muted">
                                                <i class="bi-camera me-1"></i>{{ $photo['photographer'] }} |
                                                <i class="bi-eye me-1"></i>{{ $photo['views'] }} views |
                                                <i class="bi-heart me-1"></i>{{ $photo['likes'] }} likes
                                            </small>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-{{ $category['color'] }}">
                                                <i class="bi-tag me-1"></i>{{ $photo['event'] }}
                                            </span>
                                            <div>
                                                <a href="#" class="btn btn-sm btn-outline-{{ $category['color'] }} me-1">
                                                    <i class="bi-zoom-in"></i> Zoom
                                                </a>
                                                <a href="#" class="btn btn-sm btn-{{ $category['color'] }}">
                                                    <i class="bi-download"></i> Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <h2 class="display-4 fw-bold">500+</h2>
                    <p class="text-muted">Foto Tersedia</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h2 class="display-4 fw-bold">25k+</h2>
                    <p class="text-muted">Total Views</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h2 class="display-4 fw-bold">8</h2>
                    <p class="text-muted">Kategori</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h2 class="display-4 fw-bold">24/7</h2>
                    <p class="text-muted">Akses</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .gallery-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }

    .card-img-container {
        position: relative;
        overflow: hidden;
        height: 200px;
    }

    .card-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .gallery-card:hover .card-img-container img {
        transform: scale(1.05);
    }

    .card-img-overlay {
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.1) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-card:hover .card-img-overlay {
        opacity: 1;
    }

    .gallery-category {
        scroll-margin-top: 100px;
    }

    .nav-link.active {
        background-color: #0d6efd;
        color: white !important;
        border-radius: 5px;
    }
</style>
@endpush

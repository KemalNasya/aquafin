@extends('layouts.app')

@section('title', 'Gallery - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden" style="min-height: 70vh; background: url('{{ asset('assets/2.jpg') }}') center/cover no-repeat; display: flex; align-items: center;">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4" style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7); animation: fadeInUp 1s ease-out;">Galeri Budidaya Ikan</h1>
                    <p class="lead fs-4 mb-4" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 1.5s ease-out;">Koleksi foto lengkap proses budidaya ikan modern dari kolam hingga panen</p>

                    <!-- Search Bar -->
                    <div class="mt-4" style="animation: fadeInUp 2s ease-out;">
                        <form action="{{ route('gallery') }}" method="GET">
                            <div class="input-group input-group-lg shadow-lg">
                                <input type="text" name="q" class="form-control border-0" placeholder="Cari galeri..." aria-label="Search gallery" style="border-radius: 25px 0 0 25px;">
                                <button class="btn btn-light border-0" type="submit" style="border-radius: 0 25px 25px 0;">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filter -->
    <section class="py-4 bg-light section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                        <a href="#" class="badge badge-filter bg-primary text-white p-3 text-decoration-none active rounded-pill shadow-sm" data-filter="all" style="animation: fadeInUp 1s ease-out;">
                            <i class="fas fa-th-large me-1"></i>All Photos
                        </a>
                        @foreach($categories as $category)
                        <a href="#" class="badge badge-filter bg-light text-dark border p-3 text-decoration-none rounded-pill shadow-sm"
                           data-filter="{{ Str::slug($category['name']) }}" style="animation: fadeInUp {{ $loop->index * 0.1 + 1.2 }}s ease-out;">
                            <i class="{{ $category['icon'] }} me-1"></i>{{ $category['name'] }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Gallery Content -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Sidebar Navigation -->
                    <div class="sticky-top" style="top: 100px;">
                        <div class="card border-0 shadow-sm rounded-3 p-3 mb-4">
                            <h6 class="fw-bold mb-3 text-primary"><i class="fas fa-folder-open me-2"></i>Kategori Galeri</h6>
                            <nav class="nav flex-column">
                                @foreach($categories as $category)
                                <a class="nav-link text-dark mb-2 p-2 rounded hover-bg-light smooth-scroll" href="#category-{{ Str::slug($category['name']) }}">
                                    <i class="{{ $category['icon'] }} text-{{ $category['color'] }} me-2"></i>
                                    {{ $category['name'] }}
                                    <small class="text-muted ms-auto">{{ count($category['photos']) }}</small>
                                </a>
                                @endforeach
                            </nav>
                        </div>

                        <div class="card border-0 shadow-sm rounded-3 p-3">
                            <h6 class="fw-bold mb-3 text-primary"><i class="fas fa-link me-2"></i>Quick Links</h6>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-gradient-primary btn-sm rounded-pill">
                                    <i class="bi-camera me-1"></i> Upload Foto
                                </a>
                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">
                                    <i class="bi-share me-1"></i> Bagikan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <!-- Gallery Categories -->
                    @foreach($categories as $category)
                    <div id="category-{{ Str::slug($category['name']) }}" class="gallery-category mb-5" data-category="{{ Str::slug($category['name']) }}">
                        <div class="d-flex align-items-center mb-4 p-3 bg-light rounded-3">
                            <div class="icon-wrapper me-3" style="width: 60px; height: 60px; background: linear-gradient(45deg, #007bff, #00bcd4); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="{{ $category['icon'] }} text-white fs-4"></i>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-1 text-primary">{{ $category['name'] }}</h3>
                                <p class="text-muted mb-0">{{ count($category['photos']) }} foto tersedia</p>
                            </div>
                        </div>

                        <div class="row g-4">
                            @foreach($category['photos'] as $photo)
                            <div class="col-md-4 mb-4 article-item" data-category="{{ Str::slug($category['name']) }}">
                                <div class="card border-0 shadow-sm h-100 gallery-card rounded-3 overflow-hidden position-relative">
                                    <div class="card-img-container position-relative overflow-hidden" style="height: 250px;">
                                        <img src="{{ $photo['image'] }}" class="card-img-top w-100 h-100 object-fit-cover" alt="{{ $photo['title'] }}">
                                        <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 100%);">
                                            <div class="w-100">
                                                <h6 class="card-title text-white fw-bold mb-1">{{ $photo['title'] }}</h6>
                                                <small class="text-white-50">{{ $photo['date'] }}</small>
                                            </div>
                                        </div>
                                        <div class="card-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-75 opacity-0 transition-all">
                                            <div class="text-center">
                                                <a href="{{ $photo['image'] }}" class="btn btn-light btn-lg rounded-circle mb-2" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ $photo['image'] }}" data-title="{{ $photo['title'] }}">
                                                    <i class="fas fa-expand-arrows-alt"></i>
                                                </a>
                                                <br>
                                                <small class="text-white">Klik untuk memperbesar</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <p class="card-text text-muted small mb-3">{{ $photo['description'] }}</p>

                                        <div class="photo-meta mb-3 d-flex justify-content-between">
                                            <small class="text-muted">
                                                <i class="bi-camera me-1"></i>{{ $photo['photographer'] }}
                                            </small>
                                            <small class="text-muted">
                                                <i class="bi-eye me-1"></i>{{ $photo['views'] }} |
                                                <i class="bi-heart me-1"></i>{{ $photo['likes'] }}
                                            </small>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-gradient-{{ $category['color'] }} text-white">
                                                <i class="bi-tag me-1"></i>{{ $photo['event'] }}
                                            </span>
                                            <div>
                                                <a href="{{ $photo['image'] }}" download class="btn btn-sm btn-outline-primary rounded-pill me-1" title="Download">
                                                    <i class="bi-download"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-primary rounded-pill" title="Share">
                                                    <i class="bi-share"></i>
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

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="imageModalLabel">Gallery Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <img id="modalImage" src="" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>



    <!-- Custom CSS -->
    <style>
        .hero-section {
            position: relative;
        }
        .hero-bg-overlay {
            z-index: 0;
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        .animate-slide-up {
            animation: slideUp 1s ease-out 0.3s both;
        }
        .animate-bounce {
            animation: bounce 2s infinite;
        }
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .gallery-card {
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15) !important;
        }
        .card-img-container img {
            transition: transform 0.3s ease;
        }
        .gallery-card:hover .card-img-container img {
            transform: scale(1.05);
        }
        .card-hover-overlay {
            transition: opacity 0.3s ease;
        }
        .gallery-card:hover .card-hover-overlay {
            opacity: 1 !important;
        }
        .hover-lift {
            transition: transform 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-2px);
        }
        .hover-bg-light:hover {
            background-color: rgba(0,123,255,0.1) !important;
        }
        .smooth-scroll {
            transition: all 0.3s ease;
        }
        .bg-gradient-primary {
            background: linear-gradient(45deg, #007bff, #6610f2);
        }
        .bg-gradient-success {
            background: linear-gradient(45deg, #28a745, #20c997);
        }
        .bg-gradient-danger {
            background: linear-gradient(45deg, #dc3545, #fd7e14);
        }
        .bg-gradient-warning {
            background: linear-gradient(45deg, #ffc107, #e83e8c);
        }
        .bg-gradient-blue {
            background: linear-gradient(45deg, #007bff, #00bcd4);
        }
        .stat-card {
            transition: transform 0.3s ease;
        }
        .stat-card:hover {
            transform: scale(1.05);
        }
        .progress {
            background-color: rgba(255,255,255,0.2);
        }
        .gallery-category {
            scroll-margin-top: 100px;
        }
        .badge-filter {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .badge-filter:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .badge-filter.active {
            background: linear-gradient(45deg, #007bff, #6610f2) !important;
            color: white !important;
        }
        .article-item {
            transition: all 0.3s ease;
        }
        .article-item.hidden {
            opacity: 0;
            transform: scale(0.8);
            pointer-events: none;
        }

    </style>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image Modal
        const imageModal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('imageModalLabel');

        imageModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const imageSrc = button.getAttribute('data-image');
            const imageTitle = button.getAttribute('data-title');

            modalImage.src = imageSrc;
            modalTitle.textContent = imageTitle;
        });

        // Smooth scrolling for category links
        document.querySelectorAll('.smooth-scroll').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Category filtering
        const filterBadges = document.querySelectorAll('.badge-filter');
        const articleItems = document.querySelectorAll('.article-item');
        const galleryCategories = document.querySelectorAll('.gallery-category');

        filterBadges.forEach(badge => {
            badge.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                // Update active badge
                filterBadges.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                if (filter === 'all') {
                    // Show all items and categories
                    articleItems.forEach(item => {
                        item.classList.remove('hidden');
                    });
                    galleryCategories.forEach(cat => {
                        cat.style.display = 'block';
                    });
                } else {
                    // Show only items with matching category
                    articleItems.forEach(item => {
                        const itemCategory = item.getAttribute('data-category');
                        if (itemCategory === filter) {
                            item.classList.remove('hidden');
                        } else {
                            item.classList.add('hidden');
                        }
                    });

                    // Show/hide categories
                    galleryCategories.forEach(cat => {
                        const catCategory = cat.getAttribute('data-category');
                        if (catCategory === filter) {
                            cat.style.display = 'block';
                        } else {
                            cat.style.display = 'none';
                        }
                    });
                }
            });
        });

        // Add animation delays to gallery cards
        document.querySelectorAll('.gallery-card').forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
            card.classList.add('animate-fade-in');
        });
    });
</script>
@endpush

@extends('layouts.app')

@section('title', 'Galeri - Pereng Mina GAP')

@section('content')
    <section class="hero-section position-relative overflow-hidden d-flex align-items-center justify-content-center"
        style="min-height: 89vh;">

        <!-- Gambar Background -->
        <img src="{{ asset('assets/kolam.jpg') }}" alt="Background"
            class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover; filter: brightness(55%); z-index: -2;">

        <!-- Overlay gradasi hitam -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.85)); z-index: -1;"></div>

        <!-- Konten -->
        <div class="container text-center text-white px-4">
            <h1 class="fw-bold mb-3 animate-fadeInUp"
                style="font-size: 2.5rem; text-shadow: 0 4px 15px rgba(0,0,0,0.9);">
                Dokumentasi Kegiatan Budidaya Ikan Pereng Mina
            </h1>

            <p class="lead mb-4 mx-auto animate-fadeInUp-delay"
                style="max-width: 750px; font-size: 1.1rem; line-height: 1.7;
                text-shadow: 0 2px 8px rgba(0,0,0,0.8);">
                Koleksi foto lengkap kegiatan budidaya ikan modern dari kolam hingga panen.
            </p>

            <div class="hero-buttons d-flex justify-content-center gap-3 animate-fadeInUp-delay2">
                <a href="#gallery-content" class="btn-hero">
                    <i class="fas fa-arrow-down me-2"></i> Lihat Foto
                </a>
            </div>
        </div>
    </section>

    <section class="filter-section">
        <div class="container">
            <div class="filter-header">
                <h4 class="filter-title">Filter Kategori Foto:</h4>
                <button class="filter-toggle d-md-none" id="filterToggle">
                    <i class="fas fa-filter"></i>
                </button>
            </div>
            <div class="filter-container" id="filterContainer">
                <a href="#" class="filter-badge active" data-filter="all">
                    <i class="fas fa-grip-horizontal me-1"></i> Semua Foto
                </a>
                @foreach($categories as $category)
                    <a href="#" class="filter-badge" data-filter="{{ Str::slug($category['name']) }}">
                        <i class="{{ $category['icon'] ?? 'fas fa-tag' }} me-1"></i> {{ $category['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="gallery-section" id="gallery-content">
        <div class="container">
            <div class="row g-4">
                @foreach($categories as $category)
                    @foreach($category['photos'] as $photo)
                        <div class="col-lg-4 col-md-6 col-sm-4 gallery-item" data-category="{{ Str::slug($category['name']) }}">
                            <div class="gallery-card">
                                <div class="card-image-container">
                                    <img src="{{ $photo['image'] }}" class="card-image" alt="{{ $photo['title'] }}">

                                    <div class="image-overlay">
                                        <h6 class="image-title">{{ $photo['title'] }}</h6>
                                        <small class="image-date">{{ $photo['date'] }}</small>
                                    </div>

                                    <div class="hover-overlay">
                                        <a href="#" class="btn-expand" data-bs-toggle="modal" data-bs-target="#imageModal"
                                           data-image="{{ $photo['image'] }}" data-title="{{ $photo['title'] }}"
                                           data-description="{{ $photo['description'] }}">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <small class="expand-text">Klik untuk memperbesar</small>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <p class="card-text">{{ $photo['description'] }}</p>
                                    <div class="card-footer">
                                        <span class="category-badge">
                                            <i class="fas fa-tag me-1"></i>{{ $category['name'] }}
                                        </span>
                                        <a href="{{ $photo['image'] }}" download class="btn-download" title="Download Foto">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Gallery Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="" class="modal-image">
                    <div id="modalDescription" class="modal-description mt-3"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    :root {
        --color-dark-blue: #0a2c4d;
        --color-medium-blue: #154e8d;
        --color-light-blue: #1e59a4;
        --color-accent: #2a7de1;
        --spacing-sm: 0.5rem;
        --spacing-md: 1rem;
        --spacing-lg: 1.5rem;
        --spacing-xl: 2rem;
        --border-radius: 8px;
        --transition: all 0.3s ease;
    }

    .btn-hero {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background: linear-gradient(90deg, #154e8d 0%, #0a2c4d 100%);
        color: white;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 500;
        box-shadow: 0 4px 15px rgba(21, 78, 141, 0.4);
        transition: var(--transition);
        animation: fadeInUp 2s ease-out;
    }

    .btn-hero:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(21, 78, 141, 0.6);
        color: white;
    }

    .filter-section {
        background: linear-gradient(90deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
        padding: var(--spacing-lg) 0;
    }

    .filter-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: var(--spacing-md);
    }

    .filter-title {
        color: rgba(255, 255, 255, 0.8);
        font-weight: 300;
        margin: 0;
    }

    .filter-toggle {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        padding: 0.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
    }

    .filter-toggle:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .filter-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: var(--spacing-sm);
        max-height: 500px;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    @media (min-width: 768px) {
        .filter-container {
            max-height: none;
        }
    }

    @media (max-width: 767px) {
        .filter-container {
            max-height: 0;
        }

        .filter-container.show {
            max-height: 500px;
        }
    }

    .filter-badge {
        padding: 0.6rem 1.2rem;
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: var(--transition);
        text-decoration: none;
        font-size: 0.9rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 200px;
    }

    .filter-badge:hover, .filter-badge.active {
        background: white;
        color: var(--color-dark-blue);
        border-color: white;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }

    .gallery-section {
        background: linear-gradient(90deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
        padding: var(--spacing-xl) 0;
    }

    .gallery-card {
        border-radius: var(--border-radius);
        overflow: hidden;
        transition: var(--transition);
        height: 100%;
        background: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-image-container {
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-card:hover .card-image {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: var(--spacing-md);
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);
        color: white;
    }

    .image-title {
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .image-date {
        color: rgba(255, 255, 255, 0.8);
    }

    .hover-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: var(--transition);
    }

    .gallery-card:hover .hover-overlay {
        opacity: 1;
    }

    .btn-expand {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        color: var(--color-dark-blue);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
        text-decoration: none;
        margin-bottom: var(--spacing-sm);
    }

    .btn-expand:hover {
        transform: scale(1.1);
        background: var(--color-accent);
        color: white;
    }

    .expand-text {
        color: white;
        font-size: 0.8rem;
    }

    .card-body {
        padding: var(--spacing-md);
        height: 120px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .card-text {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: var(--spacing-md);
        flex: 1;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        line-height: 1.4;
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .category-badge {
        background: linear-gradient(90deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
        color: white;
        padding: 0.4rem 0.7rem;
        border-radius: 4px;
        font-size: 0.8rem;
    }

    .btn-download {
        color: var(--color-medium-blue);
        border: 1px solid var(--color-medium-blue);
        border-radius: 20px;
        padding: 0.3rem 0.6rem;
        transition: var(--transition);
        text-decoration: none;
    }

    .btn-download:hover {
        background: var(--color-medium-blue);
        color: white;
    }



    .modal-content {
        border: none;
        border-radius: var(--border-radius);
        overflow: hidden;
    }

    .modal-header {
        border-bottom: 1px solid #eee;
    }

    .modal-image {
        width: 100%;
        border-radius: 0 0 var(--border-radius) var(--border-radius);
    }

    .modal-description {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        max-height: 200px;
        overflow-y: auto;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: var(--border-radius);
        border: 1px solid #e9ecef;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .gallery-item {
        animation: fadeInUp 0.5s ease-out;
    }

    .gallery-item.hidden {
        display: none;
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: 60vh;
        }

        .col-lg-4 {
            width: 250px;
        }
    }

    @media (max-width: 576px) {
        .col-lg-4 {
            width: 220px;
        }

        .col-sm-4 {
            width: 50%;
        }

        .card-image-container {
            height: 180px;
        }

        .card-body {
            height: 100px;
        }

        .filter-badge {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            max-width: 150px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image Modal Logic
        const imageModal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('imageModalLabel');
        const modalDescription = document.getElementById('modalDescription');

        if (imageModal) {
            imageModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const imageSrc = button.getAttribute('data-image');
                const imageTitle = button.getAttribute('data-title');
                const imageDescription = button.getAttribute('data-description');

                modalImage.src = imageSrc;
                modalTitle.textContent = imageTitle;
                modalDescription.innerHTML = imageDescription;
            });
        }

        // Category Filtering Logic
        const filterBadges = document.querySelectorAll('.filter-badge');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const filterToggle = document.getElementById('filterToggle');
        const filterContainer = document.getElementById('filterContainer');

        function filterGallery(filter) {
            // Filter Photos
            galleryItems.forEach(item => {
                const isMatch = (filter === 'all' || item.getAttribute('data-category') === filter);
                item.classList.toggle('hidden', !isMatch);
            });

            // Scroll to content after filtering
            if (filter !== 'all') {
                setTimeout(() => {
                    document.getElementById('gallery-content').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 300);
            }
        }

        // Filter Toggle for Mobile
        if (filterToggle && filterContainer) {
            filterToggle.addEventListener('click', function() {
                filterContainer.classList.toggle('show');
                this.querySelector('i').classList.toggle('fa-filter');
                this.querySelector('i').classList.toggle('fa-times');
            });

            // Close filter when clicking outside on mobile
            document.addEventListener('click', function(e) {
                if (window.innerWidth < 768 && !filterToggle.contains(e.target) && !filterContainer.contains(e.target)) {
                    filterContainer.classList.remove('show');
                    filterToggle.querySelector('i').classList.remove('fa-times');
                    filterToggle.querySelector('i').classList.add('fa-filter');
                }
            });
        }

        // Event Listeners
        filterBadges.forEach(badge => {
            badge.addEventListener('click', function(e) {
                e.preventDefault();
                const filter = this.getAttribute('data-filter');

                filterBadges.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                filterGallery(filter);

                // Close filter on mobile after selection
                if (window.innerWidth < 768 && filterContainer) {
                    filterContainer.classList.remove('show');
                    filterToggle.querySelector('i').classList.remove('fa-times');
                    filterToggle.querySelector('i').classList.add('fa-filter');
                }
            });
        });

        // Initialize
        const allPhotosBadge = document.querySelector('[data-filter="all"]');
        if (allPhotosBadge) {
            filterGallery('all');
        }
    });
</script>
@endpush
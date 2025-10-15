@extends('layouts.app')

@section('title', 'Galeri - Pereng Mina GAP')

@section('content')
    <section class="hero-section">
        <div class="hero-background"></div>
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <h1 class="hero-title">Dokumentasi Kegiatan Budidaya Ikan Pereng Mina</h1>
            <p class="hero-subtitle">Koleksi foto lengkap kegiatan budidaya ikan modern dari kolam hingga panen.</p>
            <a href="#gallery-content" class="btn-hero">
                <i class="fas fa-arrow-down me-2"></i> Lihat Foto
            </a>
        </div>
    </section>

    <section class="filter-section">
        <div class="container">
            <h4 class="filter-title">Filter Kategori:</h4>
            <div class="filter-container">
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
            @foreach($categories as $category)
            <div id="category-{{ Str::slug($category['name']) }}" class="gallery-category" data-category="{{ Str::slug($category['name']) }}">
                <div class="category-header">
                    <div class="category-icon">
                        <i class="{{ $category['icon'] ?? 'fas fa-camera' }}"></i>
                    </div>
                    <div>
                        <h3 class="category-name">{{ $category['name'] }}</h3>
                        <p class="category-count">{{ count($category['photos']) }} foto tersedia</p>
                    </div>
                </div>

                <div class="horizontal-scroll-container">
                    <div class="scroll-content">
                        @foreach($category['photos'] as $photo)
                        <div class="scroll-item gallery-item" data-category="{{ Str::slug($category['name']) }}">
                            <div class="gallery-card">
                                <div class="card-image-container">
                                    <img src="{{ $photo['image'] }}" class="card-image" alt="{{ $photo['title'] }}">
                                    
                                    <div class="image-overlay">
                                        <h6 class="image-title">{{ $photo['title'] }}</h6>
                                        <small class="image-date">{{ $photo['date'] }}</small>
                                    </div>

                                    <div class="hover-overlay">
                                        <a href="#" class="btn-expand" data-bs-toggle="modal" data-bs-target="#imageModal"
                                           data-image="{{ $photo['image'] }}" data-title="{{ $photo['title'] }}">
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
                    </div>
                </div>
            </div>
            @endforeach
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

    .hero-section {
        min-height: 70vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('{{ asset('assets/kolam.jpg') }}') center/cover no-repeat;
        filter: brightness(60%);
        z-index: -1;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.85) 100%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
        width: 100%;
        padding: var(--spacing-xl) 0;
    }

    .hero-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: var(--spacing-md);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        animation: fadeInUp 1s ease-out;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        margin-bottom: var(--spacing-xl);
        opacity: 0.85;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        animation: fadeInUp 1.5s ease-out;
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

    .filter-title {
        color: rgba(255, 255, 255, 0.8);
        font-weight: 300;
        margin-bottom: var(--spacing-md);
        text-align: center;
    }

    .filter-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: var(--spacing-sm);
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

    .gallery-category {
        margin-bottom: var(--spacing-xl);
    }

    .category-header {
        background: rgba(255, 255, 255, 0.08);
        border-radius: var(--border-radius);
        padding: var(--spacing-lg);
        margin-bottom: var(--spacing-lg);
        border-left: 4px solid var(--color-accent);
        display: flex;
        align-items: center;
        transition: var(--transition);
    }

    .category-header:hover {
        background: rgba(255, 255, 255, 0.12);
    }

    .category-icon {
        width: 50px;
        height: 50px;
        background: white;
        color: var(--color-dark-blue);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: var(--spacing-md);
    }

    .category-name {
        color: white;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }

    .category-count {
        color: rgba(255, 255, 255, 0.7);
        margin: 0;
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
    }

    .card-text {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: var(--spacing-md);
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

    .horizontal-scroll-container {
        overflow-x: auto;
        padding-bottom: var(--spacing-sm);
        scrollbar-width: thin;
        scrollbar-color: var(--color-medium-blue) rgba(0,0,0,0.1);
    }

    .horizontal-scroll-container::-webkit-scrollbar {
        height: 6px;
    }

    .horizontal-scroll-container::-webkit-scrollbar-track {
        background: rgba(0,0,0,0.1);
        border-radius: 10px;
    }

    .horizontal-scroll-container::-webkit-scrollbar-thumb {
        background-color: var(--color-medium-blue);
        border-radius: 10px;
    }

    .scroll-content {
        display: flex;
        flex-wrap: nowrap;
        gap: var(--spacing-md);
    }

    .scroll-item {
        flex: 0 0 auto;
        width: 280px;
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

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .gallery-item {
        animation: fadeInUp 0.5s ease-out;
    }

    .gallery-item.hidden {
        opacity: 0;
        max-height: 0;
        margin: 0;
        padding: 0;
        overflow: hidden;
        pointer-events: none;
        transform: scale(0.9);
    }

    @media (max-width: 992px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: 60vh;
        }
        
        .hero-title {
            font-size: 1.75rem;
        }
        
        .category-header {
            padding: var(--spacing-md);
        }
        
        .category-icon {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }
        
        .scroll-item {
            width: 250px;
        }
    }

    @media (max-width: 576px) {
        .scroll-item {
            width: 220px;
        }
        
        .card-image-container {
            height: 180px;
        }
        
        .filter-badge {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
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

        if (imageModal) {
            imageModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const imageSrc = button.getAttribute('data-image');
                const imageTitle = button.getAttribute('data-title');

                modalImage.src = imageSrc;
                modalTitle.textContent = imageTitle;
            });
        }

        // Category Filtering Logic
        const filterBadges = document.querySelectorAll('.filter-badge');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const galleryCategories = document.querySelectorAll('.gallery-category');

        function filterGallery(filter) {
            // Filter Photos
            galleryItems.forEach(item => {
                const isMatch = (filter === 'all' || item.getAttribute('data-category') === filter);
                item.classList.toggle('hidden', !isMatch);
            });

            // Show/Hide Categories
            galleryCategories.forEach(cat => {
                const catCategory = cat.getAttribute('data-category');
                const hasVisibleItems = Array.from(cat.querySelectorAll('.gallery-item'))
                    .some(item => !item.classList.contains('hidden'));
                
                const isVisible = (filter === 'all' || catCategory === filter || hasVisibleItems);
                cat.style.display = isVisible ? 'block' : 'none';
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

        // Event Listeners
        filterBadges.forEach(badge => {
            badge.addEventListener('click', function(e) {
                e.preventDefault();
                const filter = this.getAttribute('data-filter');

                filterBadges.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                filterGallery(filter);
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
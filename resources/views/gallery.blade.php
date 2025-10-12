@extends('layouts.app')

@section('title', 'Galeri - Pereng Mina GAP')

@section('content')
    <section class="hero-section position-relative overflow-hidden" 
        style="min-height: 89vh; display: flex; align-items: center;">
        
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: url('{{ asset('assets/kolam.jpg') }}') center/cover no-repeat; 
                    background-size: cover; filter: brightness(60%); z-index: -1;">
        </div>
        
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay">
        </div>

        <div class="container position-relative text-center text-white py-5" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="display-4 fw-bold mb-3 text-shadow-dark" 
                        style="animation: fadeInUp 1s ease-out; animation-delay: 0.2s;">
                        Dokumentasi Kegiatan Budidaya Ikan Pereng Mina
                    </h1>
                    <p class="lead fs-5 mb-5 text-shadow-dark opacity-75" 
                        style="animation: fadeInUp 1.5s ease-out; animation-delay: 0.4s;">
                        Koleksi foto lengkap kegiatan budidaya ikan modern dari kolam hingga panen.
                    </p>
                    
                    <a href="#gallery-content" class="btn btn-lg btn-modern-primary rounded-pill shadow-lg animate-fade-in"
                        style="animation-delay: 0.6s;">
                        <i class="fas fa-arrow-down me-2"></i> Explore Gallery
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-4" style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);">
        <div class="container">
               <h4 class="text-white-50 fw-light mb-3 text-center">Filter Kategori:</h4>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#" class="badge p-3 rounded-pill badge-dark-mode active-filter-badge" data-filter="all">
                    <i class="fas fa-grip-horizontal me-1"></i> Semua Foto
                </a>
                @foreach($categories as $category)
                    <a href="#" class="badge p-3 rounded-pill badge-dark-mode" 
                        data-filter="{{ Str::slug($category['name']) }}">
                        <i class="{{ $category['icon'] ?? 'fas fa-tag' }} me-1"></i> {{ $category['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    
    <section class="py-5" style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);" id="gallery-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($categories as $category)
                    <div id="category-{{ Str::slug($category['name']) }}" 
                         class="gallery-category mb-5" 
                         data-category="{{ Str::slug($category['name']) }}">
                        
                        <div class="d-flex align-items-center mb-4 p-3 hover-bg-dark-lighten rounded-3 shadow-lg transition-all" 
                            style="cursor: default;">
                            <div class="icon-wrapper me-3 bg-white text-primary-custom rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="{{ $category['icon'] ?? 'fas fa-camera' }} fs-4"></i>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-1 text-white">{{ $category['name'] }}</h3>
                                <p class="text-light mb-0">{{ count($category['photos']) }} foto tersedia</p>
                            </div>
                        </div>

                        {{-- === START OF HORIZONTAL SCROLL WRAPPER === --}}
                        <div class="horizontal-scroll-wrapper">
                            <div class="d-flex flex-nowrap gap-4 pb-3"> {{-- `flex-nowrap` dan `gap-4` --}}
                                @foreach($category['photos'] as $photo)
                                <div class="col-12 col-md-6 col-lg-4 gallery-item animate-fade-in flex-shrink-0" {{-- Tambah flex-shrink-0 --}}
                                    data-category="{{ Str::slug($category['name']) }}">
                                    <div class="card border-0 shadow-lg h-100 gallery-card rounded-3 overflow-hidden position-relative">
                                        <div class="card-img-container position-relative overflow-hidden" style="height: 250px;">
                                            
                                            <img src="{{ $photo['image'] }}" class="card-img-top w-100 h-100 object-fit-cover" alt="{{ $photo['title'] }}">
                                            
                                            <div class="card-img-overlay d-flex align-items-end p-3 image-caption-overlay">
                                                <div class="w-100">
                                                    <h6 class="card-title text-white fw-bold mb-1 text-shadow-dark">{{ $photo['title'] }}</h6>
                                                    <small class="text-white-50 text-shadow-dark">{{ $photo['date'] }}</small>
                                                </div>
                                            </div>
                                            
                                            <div class="card-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-75 opacity-0 transition-all">
                                                <div class="text-center">
                                                    <a href="#" class="btn btn-light btn-lg rounded-circle mb-2 hover-lift" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#imageModal" 
                                                        data-image="{{ $photo['image'] }}" 
                                                        data-title="{{ $photo['title'] }}">
                                                        <i class="fas fa-expand-arrows-alt"></i>
                                                    </a>
                                                    <br>
                                                    <small class="text-white">Klik untuk memperbesar</small>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card-body p-3 bg-white">
                                            <p class="card-text text-muted small mb-3">{{ $photo['description'] }}</p>

                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge bg-gradient-primary-custom text-white">
                                                    <i class="fas fa-tag me-1"></i>{{ $category['name'] }}
                                                </span>
                                                <div>
                                                    <a href="{{ $photo['image'] }}" download class="btn btn-sm btn-outline-primary-custom rounded-pill hover-lift" title="Download Foto">
                                                        <i class="bi-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- === END OF HORIZONTAL SCROLL WRAPPER === --}}

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="imageModalLabel">Gallery Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <img id="modalImage" src="" alt="" class="w-100 rounded-bottom">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    /* Define the new, deep blue color palette */
    :root {
        /* Warna Dasar Baru */
        --color-dark-blue: #0a2c4d;
        --color-medium-blue: #154e8d;
        --bs-primary-custom: var(--color-dark-blue);
        
        /* Gradien Baru */
        --bs-primary-gradient: linear-gradient(90deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
        --color-dark-lighten: #1e59a4; /* Warna sedikit lebih terang dari dark blue untuk hover/elemen kecil */
    }

    /* HERO SECTION STYLING */
    .hero-section {
        /* Hapus background dari sini, dipindah ke div terpisah untuk filter brightness */
        background: none !important; 
    }
    
    .hero-overlay {
        /* Gradasi hitam transparan (rgba(0,0,0,0.3)) ke pekat (rgba(0,0,0,0.85)) */
        background: linear-gradient(90deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.85) 100%);
        opacity: 1; 
        z-index: 1;
    }
    
    .text-shadow-dark {
         /* Teks putih terlihat sangat kontras dan profesional */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); 
    }

    /* Tombol Biru Modern dengan efek hover lift + glow shadow */
    .btn-modern-primary {
        background: linear-gradient(90deg, #154e8d 0%, #0a2c4d 100%);
        border: none;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(21, 78, 141, 0.4);
    }

    .btn-modern-primary:hover {
        transform: translateY(-3px); /* Hover lift */
        opacity: 0.95;
        box-shadow: 0 8px 20px rgba(21, 78, 141, 0.6); /* Glow shadow */
        color: white;
    }

    /* CUSTOM CLASSES FOR GALLERY */
    .bg-gradient-primary-custom {
        background: var(--bs-primary-gradient) !important;
    }

    .text-primary-custom {
        color: var(--color-dark-blue) !important;
    }

    .btn-outline-primary-custom {
        color: var(--color-medium-blue);
        border-color: var(--color-medium-blue);
        transition: all 0.3s ease;
    }
    .btn-outline-primary-custom:hover {
        color: white;
        background-color: var(--color-medium-blue);
        border-color: var(--color-medium-blue);
    }

    .hover-bg-dark-lighten {
        transition: all 0.3s ease;
    }
    .hover-bg-dark-lighten:hover {
        background-color: var(--color-dark-lighten) !important;
        cursor: pointer;
    }
    
    /* FILTER BADGE STYLES */
    .badge-filter {
        transition: all 0.3s ease;
        cursor: pointer;
        font-weight: 500;
        border: 1px solid rgba(255, 255, 255, 0.4);
    }
    .badge-dark-mode {
        background-color: transparent !important;
        color: rgba(255, 255, 255, 0.8) !important;
    }
    .badge-dark-mode:hover {
        background-color: rgba(255, 255, 255, 0.1) !important;
        color: white !important;
    }
    .active-filter-badge {
        background: white !important; 
        color: var(--color-dark-blue) !important;
        border: 1px solid white !important;
        font-weight: bold;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }

    /* CARD GALLERY EFFECTS */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeInUp 1s ease-out;
    }
    .gallery-card {
        transition: all 0.3s ease;
    }
    .gallery-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important; 
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
    .image-caption-overlay {
        transition: all 0.3s ease;
        opacity: 1;
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%); /* Efek gradien baru untuk teks di gambar */
    }

    /* Horizontal Scroll Wrapper */
    .horizontal-scroll-wrapper {
        overflow-x: auto; /* Memungkinkan scroll horizontal */
        -webkit-overflow-scrolling: touch; /* Untuk smooth scrolling di iOS */
        scrollbar-width: thin; /* Untuk Firefox */
        scrollbar-color: var(--color-medium-blue) rgba(0,0,0,0.3); /* Untuk Firefox */
    }

    /* Custom scrollbar untuk Webkit (Chrome, Safari) */
    .horizontal-scroll-wrapper::-webkit-scrollbar {
        height: 8px; /* Tinggi scrollbar */
    }
    .horizontal-scroll-wrapper::-webkit-scrollbar-track {
        background: rgba(0,0,0,0.3); /* Warna track scrollbar */
        border-radius: 10px;
    }
    .horizontal-scroll-wrapper::-webkit-scrollbar-thumb {
        background-color: var(--color-medium-blue); /* Warna thumb scrollbar */
        border-radius: 10px;
        border: 2px solid rgba(0,0,0,0.3);
    }

    /* Filtering Transition for visibility */
    .gallery-item { /* Ganti .article-item menjadi .gallery-item agar spesifik */
        transition: all 0.5s ease-in-out;
    }
    .gallery-item.hidden {
        opacity: 0;
        /* Menggunakan max-height agar transisi tinggi bisa berjalan halus */
        max-height: 0;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        overflow: hidden;
        pointer-events: none;
        transform: scale(0.9);
    }
    
    /* Hover lift */
    .hover-lift {
        transition: transform 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-2px);
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .hero-section h1 {
            font-size: 2.5rem !important;
        }
        
        .hero-section p.lead {
            font-size: 1.25rem !important;
        }
    }
    
    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2rem !important;
        }
        
        .hero-section p.lead {
            font-size: 1.1rem !important;
        }
        
        .badge-filter {
            padding: 0.5rem 1rem !important;
            font-size: 0.85rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // --- Image Modal Logic ---
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

        // --- Category Filtering Logic ---
        const filterBadges = document.querySelectorAll('.badge-filter');
        const galleryCategories = document.querySelectorAll('.gallery-category');
        
        function filterGallery(filter) {
            const galleryItems = document.querySelectorAll('.gallery-item'); // Mengganti .article-item
            
            // 1. Filter Item (Photos)
            galleryItems.forEach(item => {
                const isMatch = (filter === 'all' || item.getAttribute('data-category') === filter);
                
                if (isMatch) {
                    item.classList.remove('hidden');
                    item.style.animation = 'none';
                    item.offsetHeight; // Trigger reflow
                    item.style.animation = 'fadeInUp 0.5s ease-out';
                } else {
                    item.classList.add('hidden');
                }
            });

            // 2. Show/Hide Categories (Headers)
            galleryCategories.forEach(cat => {
                const catCategory = cat.getAttribute('data-category');
                const isVisible = (filter === 'all' || catCategory === filter);
                
                cat.classList.toggle('d-none', !isVisible); 
            });
            
            // Scroll to the content after filtering
            if (filter !== 'all') {
                document.getElementById('gallery-content').scrollIntoView({ behavior: 'smooth' });
            }
        }

        // --- Event Listener ---
        filterBadges.forEach(badge => {
            badge.addEventListener('click', function(e) {
                e.preventDefault(); 
                
                const filter = this.getAttribute('data-filter');

                filterBadges.forEach(b => {
                    b.classList.remove('active-filter-badge');
                    b.classList.add('badge-dark-mode'); 
                });
                this.classList.add('active-filter-badge');
                this.classList.remove('badge-dark-mode');

                filterGallery(filter);
            });
        });

        // --- Initialize: Set 'Semua Foto' sebagai default aktif ---
        const allPhotosBadge = document.querySelector('[data-filter="all"]');
        if (allPhotosBadge) {
            filterGallery('all'); 
            allPhotosBadge.classList.add('active-filter-badge');
            allPhotosBadge.classList.remove('badge-dark-mode');
        }
    });
</script>
@endpush
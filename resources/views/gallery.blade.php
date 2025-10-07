@extends('layouts.app')

@section('title', 'Galeri - Company Name')

@section('content')
    <section class="hero-section position-relative overflow-hidden" style="min-height: 70vh; background: url('{{ asset('assets/template.jpg') }}') center/cover no-repeat; display: flex; align-items: center;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%); opacity: 0.9;"></div>
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4 animate-fade-in" style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7); animation-delay: 0.2s;">Galeri Budidaya Ikan</h1>
                    <p class="lead fs-4 mb-4 animate-fade-in" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation-delay: 0.4s;">Koleksi foto lengkap proses budidaya ikan modern dari kolam hingga panen</p>

                    <div class="mt-4 animate-fade-in" style="animation-delay: 0.6s;">
                        <form action="{{ route('gallery') }}" method="GET">
                            <div class="input-group input-group-lg shadow-lg">
                                <input type="text" name="q" class="form-control border-0 bg-white" placeholder="Cari galeri..." aria-label="Search gallery" style="border-radius: 25px 0 0 25px;">
                                <button class="btn btn-primary-custom-dark border-0 text-white" type="submit" style="border-radius: 0 25px 25px 0;">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 section-padding shadow-sm sticky-top"
        style="top: 0; z-index: 1020; background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%); border-bottom: 2px solid rgba(255,255,255,0.2); transition: all 0.3s ease;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                        <a
                            class="badge badge-filter p-3 text-decoration-none rounded-pill shadow-sm active-filter-badge"
                            data-filter="all" style="animation: fadeInUp 1s ease-out;">
                            <i class="fas fa-th-large me-1"></i>Semua Foto
                        </a>
                        {{-- Badge Category (Disesuaikan agar teksnya tetap terang) --}}
                        @foreach ($categories as $category)
                            <a
                                class="badge badge-filter bg-dark text-white border p-3 text-decoration-none rounded-pill shadow-sm hover-lift badge-dark-mode"
                                data-filter="{{ Str::slug($category['name']) }}"
                                style="animation: fadeInUp {{ $loop->index * 0.1 + 1.2 }}s ease-out;">
                                {{ $category['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach($categories as $category)
                    <div id="category-{{ Str::slug($category['name']) }}" class="gallery-category mb-5" data-category="{{ Str::slug($category['name']) }}">
                        <div class="d-flex align-items-center mb-4 p-3 hover-bg-dark-lighten rounded-3 shadow-lg smooth-scroll">
                            <div class="icon-wrapper me-3" style="width: 60px; height: 60px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="{{ $category['icon'] ?? 'fas fa-camera' }} text-primary-custom fs-4"></i>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-1 text-white">{{ $category['name'] }}</h3>
                                <p class="text-light mb-0">{{ count($category['photos']) }} foto tersedia</p>
                            </div>
                        </div>

                        <div class="row g-4">
                            @foreach($category['photos'] as $photo)
                            <div class="col-md-6 col-lg-4 mb-4 article-item" data-category="{{ Str::slug($category['name']) }}">
                                <div class="card border-0 shadow-lg h-100 gallery-card rounded-3 overflow-hidden position-relative animate-fade-in">
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
                                                <a href="#" class="btn btn-light btn-lg rounded-circle mb-2" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ $photo['image'] }}" data-title="{{ $photo['title'] }}">
                                                    <i class="fas fa-expand-arrows-alt"></i>
                                                </a>
                                                <br>
                                                <small class="text-white">Klik untuk memperbesar</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <p class="card-text text-muted small mb-3">{{ $photo['description'] }}</p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-gradient-primary-custom text-white">
                                                <i class="fas fa-tag me-1"></i>{{ $category['name'] }}
                                            </span>
                                            <div>
                                                <a href="{{ $photo['image'] }}" download class="btn btn-sm btn-outline-primary-custom rounded-pill me-1" title="Download">
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


    <style>
        /* Define the new, deep blue color palette */
        :root {
            /* Warna Dasar Baru */
            --color-dark-blue: #0a2c4d;
            --color-medium-blue: #154e8d;
            --bs-primary-custom: var(--color-dark-blue);
            
            /* Gradien Baru yang diminta user: #0a2c4d to #154e8d */
            --bs-primary-gradient: linear-gradient(90deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
            --color-dark-lighten: #1e59a4; /* Warna sedikit lebih terang dari dark blue untuk hover/elemen kecil */
        }

        /* Custom Classes for New Colors/Gradients */
        .bg-gradient-primary-custom {
            background: var(--bs-primary-gradient) !important;
        }

        .text-primary-custom {
            color: var(--color-dark-blue) !important;
        }

        .btn-primary-custom-dark {
            background-color: var(--color-medium-blue) !important;
            border-color: var(--color-medium-blue) !important;
        }
        
        .btn-outline-primary-custom {
            color: var(--color-medium-blue);
            border-color: var(--color-medium-blue);
        }
        .btn-outline-primary-custom:hover {
            color: white;
            background-color: var(--color-medium-blue);
            border-color: var(--color-medium-blue);
        }

        /* Hover/Focus effect untuk background gelap */
        .hover-bg-dark-lighten:hover {
             background-color: var(--color-dark-lighten) !important;
             cursor: pointer;
        }

        /* Filter Badge Styles: Menggunakan gradien yang baru */
        .badge-filter {
            transition: all 0.3s ease;
            cursor: pointer;
            font-weight: 500;
        }
        .badge-filter.active-filter-badge {
            background: white !important; /* Diubah menjadi putih agar menonjol di background gelap */
            color: var(--color-dark-blue) !important;
            border: none !important;
            font-weight: bold;
        }
        /* Style for non-active badges when background is dark */
        .badge-dark-mode {
            background-color: transparent !important;
            color: rgba(255, 255, 255, 0.8) !important;
            border-color: rgba(255, 255, 255, 0.4) !important;
        }
        .badge-dark-mode:hover {
            background-color: rgba(255, 255, 255, 0.1) !important;
            color: white !important;
        }


        /* Style Tambahan Lain (tidak diubah dari sebelumnya) */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeInUp 1s ease-out;
        }
        .gallery-card {
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .gallery-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3) !important; /* Shadow lebih tebal untuk background gelap */
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
        .article-item {
            transition: all 0.5s ease-in-out;
            display: block;
        }
        .article-item.hidden {
            max-height: 0;
            opacity: 0;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            transform: scale(0.9);
            pointer-events: none;
            overflow: hidden;
            display: none;
        }
        .gallery-category {
            transition: all 0.5s ease-in-out;
            scroll-margin-top: 100px;
        }
    </style>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image Modal logic remains the same
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

        // Category filtering logic
        const filterBadges = document.querySelectorAll('.badge-filter');
        const articleItems = document.querySelectorAll('.article-item');
        const galleryCategories = document.querySelectorAll('.gallery-category');

        filterBadges.forEach(badge => {
            badge.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                // Update active badge state
                filterBadges.forEach(b => {
                    // Reset all badges to dark mode style
                    b.classList.remove('active', 'active-filter-badge');
                    b.classList.add('badge-dark-mode'); 
                });
                // Set the clicked badge to active (white background)
                this.classList.add('active', 'active-filter-badge');
                this.classList.remove('badge-dark-mode');


                if (filter === 'all') {
                    // Show all items and categories
                    articleItems.forEach(item => {
                        item.classList.remove('hidden');
                        item.style.animation = 'none';
                        item.offsetHeight; /* trigger reflow */
                        item.style.animation = null;
                    });
                    galleryCategories.forEach(cat => {
                        cat.style.display = 'block';
                    });
                } else {
                    // Filter articles
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

        // Initialize first badge as active (Semua Foto)
        const allPhotosBadge = document.querySelector('[data-filter="all"]');
        if (allPhotosBadge) {
            allPhotosBadge.click(); // Trigger initial state
        }
    });
</script>
@endpush
@extends('layouts.app')

@section('title', 'Articles - Company Name')

@section('content')
    <section class="hero-section position-relative overflow-hidden"
        style="min-height: 88vh; 
               background: url('{{ asset('assets/kolam.jpg') }}') center/cover no-repeat; 
               display: flex; 
               align-items: center;">
        
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay">
        </div>
        
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: url('{{ asset('assets/kolam.jpg') }}') center/cover no-repeat; 
                    filter: brightness(60%); z-index: -1;">
        </div>

        <div class="container position-relative text-center text-white py-5" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="display-3 fw-bolder mb-4 text-shadow-dark"
                        style="animation: fadeInUp 1s ease-out; color: #fff; letter-spacing: 1px;">
                        Articles & Insights
                    </h1>
                    <p class="lead fs-5 mb-5 text-shadow-dark opacity-75"
                        style="animation: fadeInUp 1.5s ease-out; color: #fff;">
                        Artikel terbaru seputar Kegiatan di Pereng Mina GAP
                    </p>
                    
                    {{-- Tombol biru modern dengan efek hover lift + glow shadow (Optional, uncomment to use) --}}
                    {{-- <a href="#articles-list" class="btn btn-lg btn-modern-primary rounded-pill shadow-lg"
                        style="animation: fadeInUp 2s ease-out;">
                        <i class="fas fa-arrow-down me-2"></i> Explore Articles
                    </a> --}}

                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5 section-padding" id="articles-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if(count($articles) > 0)
                        @foreach ($articles as $article)
                            <div class="card border-0 shadow-sm mb-4 article-item rounded-3 overflow-hidden card-hover"
                                data-category="{{ Str::slug($article['category']) }}"
                                style="animation: fadeInUp {{ $loop->index * 0.1 + 1 }}s ease-out;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ $article['image'] }}" class="img-fluid hover-scale"
                                            style="object-fit: cover; height: 200px; width: 100%;"
                                            alt="{{ $article['title'] }}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body d-flex flex-column h-100">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <span class="badge bg-gradient-primary">{{ $article['category'] }}</span>
                                                <small class="text-muted">{{ $article['read_time'] }}</small>
                                            </div>

                                            <h5 class="card-title fw-bold">
                                                <a href="{{ route('article.show', $article['id']) }}"
                                                    class="text-decoration-none text-dark hover-link">
                                                    {{ $article['title'] }}
                                                </a>
                                            </h5>

                                            <p class="card-text text-muted flex-grow-1">{{ $article['excerpt'] }}</p>

                                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                                <small
                                                    class="text-muted">{{ \Carbon\Carbon::parse($article['published_at'])->format('M d, Y') }}</small>

                                                <div class="tags">
                                                    @foreach (array_slice($article['tags'], 0, 2) as $tag)
                                                        <span
                                                            class="badge bg-light text-dark border rounded-pill me-1">{{ $tag }}</span>
                                                    @endforeach
                                                    @if (count($article['tags']) > 2)
                                                        <span
                                                            class="badge bg-light text-dark border rounded-pill">+{{ count($article['tags']) - 2 }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <nav class="pagination-modern justify-content-center mt-4" style="animation: fadeInUp 2s ease-out;">
                            {{ $articles->links() }}
                        </nav>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-newspaper fa-4x text-muted mb-3"></i>
                            <h4 class="text-muted">Belum ada artikel tersedia</h4>
                            <p class="text-muted">Silakan kembali lagi nanti untuk melihat artikel terbaru.</p>
                        </div>
                    @endif
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm mb-4 rounded-3 overflow-hidden card-hover"
                        style="animation: fadeInUp 1.5s ease-out;">
                        <div class="card-header bg-white border-0 py-3">
                            <h6 class="fw-bold mb-0 text-primary">
                                <i class="fas fa-clock text-info me-2"></i>Latest Articles
                            </h6>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                @foreach ($articles->take(3) as $popular)
                                    <a href="{{ route('article.show', $popular['id']) }}"
                                        class="list-group-item list-group-item-action border-0 px-3 py-3 hover-lift">
                                        <div class="d-flex w-100 justify-content-between align-items-start">
                                            <h6 class="mb-1 fw-bold text-dark">{{ \Str::limit($popular['title'], 50) }}</h6>
                                            <small class="badge bg-gradient-primary ms-2">{{ $popular['read_time'] }}</small>
                                        </div>
                                        <small class="text-muted">
                                            <i class="fas fa-calendar me-1"></i>
                                            {{ \Carbon\Carbon::parse($popular['published_at'])->format('M d, Y') }}
                                        </small>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm mb-4 rounded-3 overflow-hidden card-hover"
                        style="animation: fadeInUp 1.7s ease-out;">
                        <div class="card-header bg-white border-0 py-3">
                            <h6 class="fw-bold mb-0 text-primary">
                                <i class="fas fa-tags me-2"></i>Categories
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-2">
                                @foreach ($categories as $category)
                                    <a href="#" class="badge bg-light text-dark border p-2 rounded-pill hover-lift text-decoration-none" 
                                        data-category="{{ Str::slug($category->name) }}">
                                        {{ $category->name }} 
                                        <span class="text-muted">({{ $category->posts_count }})</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

---

    <section class="py-5" style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%); border-bottom: 2px solid rgba(255,255,255,0.2);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">Featured Articles</h2>
                <p class="text-white-50">Artikel pilihan editor</p>
            </div>
            <div class="row">
                @if(count($articles) > 0)
                    @foreach ($articles->take(2) as $featured)
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm h-100 rounded-3 overflow-hidden card-hover"
                                style="animation: fadeInUp {{ $loop->index * 0.2 + 2.5 }}s ease-out;">
                                <img src="{{ $featured['image'] }}" class="card-img-top" alt="{{ $featured['title'] }}"
                                    style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <span class="badge bg-gradient-primary text-white mb-2 align-self-start">Featured</span>
                                    <h5 class="card-title fw-bold text-dark">{{ $featured['title'] }}</h5>
                                    <p class="card-text text-dark flex-grow-1">{{ $featured['excerpt'] }}</p>
                                    <a href="{{ route('article.show', $featured['id']) }}"
                                        class="btn btn-primary rounded-pill align-self-start mt-auto">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center text-white py-4">
                        <p>Tidak ada artikel featured tersedia saat ini.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

---

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hero Section Overlay and Text Enhancements */
        .hero-section {
            /* Remove background from this element to separate it from the overlay/filter */
            background: none !important; 
        }

        .hero-overlay {
            /* Gradasi hitam transparan (rgba(0,0,0,0.3)) ke pekat (rgba(0,0,0,0.85)) */
            background: linear-gradient(90deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.85) 100%);
            opacity: 1; /* Overlay sudah memiliki transparansi di warna gradasi */
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


        /* Existing styles below */
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15) !important;
        }

        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .hover-link:hover {
            color: #154e8d !important;
        }

        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
        }

        .bg-gradient-primary {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .badge-filter.active {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%) !important;
            color: #fff !important;
            border: none !important;
        }

        .badge-filter:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(21, 78, 141, 0.3);
        }

        .pagination-modern .page-link {
            border: none;
            color: #154e8d;
            margin: 0 2px;
            transition: all 0.3s ease;
        }

        .pagination-modern .page-link:hover {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            color: white;
            transform: scale(1.1);
        }

        .pagination-modern .page-item.active .page-link {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            border: none;
            color: #fff;
        }

        .btn-primary {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        /* Perbaikan warna teks untuk kontras yang lebih baik */
        .card-title,
        .card-body h5,
        .card-body h6 {
            color: #2c3e50 !important;
        }

        .card-text {
            color: #5a6c7d !important;
            line-height: 1.6;
        }

        .list-group-item h6 {
            color: #2c3e50 !important;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero-section h1 {
                font-size: 2.5rem !important; /* Adjust for smaller screens */
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
            
            .card-body h5.card-title {
                font-size: 1.1rem;
            }
        }
    </style>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.badge-filter');
            const articleItems = document.querySelectorAll('.article-item');
            const categoryLinks = document.querySelectorAll('.card-body .badge[data-category]'); // Target the sidebar categories

            // Filter functionality
            filterButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove active state from all
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-gradient-primary', 'text-white');
                        btn.classList.add('bg-light', 'text-dark', 'border');
                    });
                    
                    // Set active state on clicked button
                    this.classList.add('active', 'bg-gradient-primary', 'text-white');
                    this.classList.remove('bg-light', 'text-dark', 'border');

                    const filterValue = this.getAttribute('data-filter');

                    articleItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                            // Apply animation for filtered items
                            item.style.animation = 'none'; // Reset animation
                            item.offsetHeight; // Trigger reflow
                            item.style.animation = 'fadeInUp 0.5s ease-out';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Sidebar Categories click functionality to trigger main filter
            categoryLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const categorySlug = this.getAttribute('data-category');
                    const filterButton = document.querySelector(`.badge-filter[data-filter="${categorySlug}"]`);
                    
                    if (filterButton) {
                        filterButton.click();
                        
                        // Scroll to the articles list section
                        document.getElementById('articles-list').scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
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
        });
    </script>
@endpush
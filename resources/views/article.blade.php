@extends('layouts.app')

@section('title', 'Articles - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden" style="min-height: 70vh; background: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3') center/cover no-repeat; display: flex; align-items: center;">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4" style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7); animation: fadeInUp 1s ease-out;">Articles & Insights</h1>
                    <p class="lead fs-4 mb-4" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 1.5s ease-out;">Artikel terbaru seputar dunia budidaya ikan modern</p>

                    <!-- Search Bar -->
                    <div class="mt-4" style="animation: fadeInUp 2s ease-out;">
                        <form action="{{ route('article') }}" method="GET">
                            <div class="input-group input-group-lg shadow-lg">
                                <input type="text" name="q" class="form-control border-0" placeholder="Cari artikel..." aria-label="Search articles" style="border-radius: 25px 0 0 25px;">
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
                            <i class="fas fa-th-large me-1"></i>All Articles
                        </a>
                        @foreach($categories as $category)
                        @if($category != 'All')
                        <a href="#" class="badge badge-filter bg-light text-dark border p-3 text-decoration-none rounded-pill shadow-sm"
                           data-filter="{{ Str::slug($category) }}" style="animation: fadeInUp {{ $loop->index * 0.1 + 1.2 }}s ease-out;">
                            {{ $category }}
                        </a>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles List -->
    <section class="py-5 section-padding">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    @foreach($articles as $article)
                    <div class="card border-0 shadow-sm mb-4 article-item rounded-3 overflow-hidden card-hover"
                         data-category="{{ Str::slug($article['category']) }}" style="animation: fadeInUp {{ $loop->index * 0.1 + 1 }}s ease-out;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $article['image'] }}" class="img-fluid hover-scale"
                                     style="object-fit: cover; height: 200px; width: 100%;" alt="{{ $article['title'] }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
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

                                    <p class="card-text text-muted">{{ $article['excerpt'] }}</p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="author-info d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop&crop=face" alt="{{ $article['author'] }}" class="rounded-circle me-2" style="width: 32px; height: 32px; object-fit: cover;">
                                            <div>
                                                <small class="fw-bold">{{ $article['author'] }}</small>
                                                <br>
                                                <small class="text-muted">
                                                    {{ \Carbon\Carbon::parse($article['published_at'])->format('M d, Y') }}
                                                </small>
                                            </div>
                                        </div>

                                        <div class="tags">
                                            @foreach(array_slice($article['tags'], 0, 2) as $tag)
                                            <span class="badge bg-light text-dark border rounded-pill">{{ $tag }}</span>
                                            @endforeach
                                            @if(count($article['tags']) > 2)
                                            <span class="badge bg-light text-dark border rounded-pill">+{{ count($article['tags']) - 2 }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Pagination -->
                    <nav aria-label="Article pagination" style="animation: fadeInUp 2s ease-out;">
                        <ul class="pagination justify-content-center pagination-modern">
                            <li class="page-item disabled">
                                <a class="page-link rounded-pill" href="#" tabindex="-1"><i class="fas fa-chevron-left me-1"></i>Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link rounded-pill" href="#">1</a></li>
                            <li class="page-item"><a class="page-link rounded-pill" href="#">2</a></li>
                            <li class="page-item"><a class="page-link rounded-pill" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link rounded-pill" href="#">Next<i class="fas fa-chevron-right ms-1"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Popular Articles -->
                    <div class="card border-0 shadow-sm mb-4 rounded-3 overflow-hidden card-hover" style="animation: fadeInUp 1.5s ease-out;">
                        <div class="card-header bg-white border-0">
                            <h6 class="fw-bold mb-0 text-primary"><i class="fas fa-fire text-warning me-2"></i>Popular Articles</h6>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                @foreach(array_slice($articles, 0, 3) as $popular)
                                <a href="#" class="list-group-item list-group-item-action border-0 px-0 py-3 hover-lift">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1 fw-bold">{{ \Str::limit($popular['title'], 50) }}</h6>
                                        <small class="badge bg-gradient-primary">{{ $popular['read_time'] }}</small>
                                    </div>
                                    <small class="text-muted"><i class="fas fa-eye me-1"></i>{{ rand(100, 500) }} views</small>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="card border-0 shadow-sm mb-4 rounded-3 overflow-hidden card-hover" style="animation: fadeInUp 1.7s ease-out;">
                        <div class="card-header bg-white border-0">
                            <h6 class="fw-bold mb-0 text-primary"><i class="fas fa-tags me-2"></i>Categories</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($categories as $category)
                                @if($category != 'All')
                                <span class="badge bg-light text-dark border p-2 rounded-pill hover-lift">
                                    {{ $category }} <span class="text-muted">({{ rand(5, 20) }})</span>
                                </span>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="card border-0 shadow-lg bg-gradient-primary text-white rounded-3 overflow-hidden" style="animation: fadeInUp 2s ease-out;">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-envelope display-4 mb-3 text-white"></i>
                            <h5 class="fw-bold">Stay Updated</h5>
                            <p class="mb-4">Dapatkan artikel terbaru langsung ke email Anda</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control border-0 rounded-pill" placeholder="Your email address" required style="background: rgba(255,255,255,0.9);">
                                </div>
                                <button type="submit" class="btn btn-light w-100 rounded-pill fw-bold shadow">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Featured Articles</h2>
                <p class="text-muted">Artikel pilihan editor</p>
            </div>
            <div class="row">
                @foreach(array_slice($articles, 0, 2) as $featured)
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100 rounded-3 overflow-hidden card-hover" style="animation: fadeInUp {{ $loop->index * 0.2 + 2.5 }}s ease-out;">
                        <img src="{{ $featured['image'] }}" class="card-img-top" alt="{{ $featured['title'] }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-primary text-white mb-2">Featured</span>
                            <h5 class="card-title fw-bold">{{ $featured['title'] }}</h5>
                            <p class="card-text text-muted">{{ $featured['excerpt'] }}</p>
                            <a href="{{ route('article.show', $featured['id']) }}" class="btn btn-primary rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Custom CSS -->
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

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        }

        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .hover-link:hover {
            color: #007bff !important;
        }

        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
        }

        .bg-gradient-primary {
            background: linear-gradient(45deg, #007bff, #6610f2);
        }

        .badge-filter {
            transition: all 0.3s ease;
        }

        .badge-filter:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
        }

        .pagination-modern .page-link {
            border: none;
            color: #007bff;
            margin: 0 2px;
            transition: all 0.3s ease;
        }

        .pagination-modern .page-link:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.1);
        }

        .pagination-modern .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.badge-filter');
        const articleItems = document.querySelectorAll('.article-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active', 'bg-primary', 'text-white'));
                filterButtons.forEach(btn => btn.classList.add('bg-light', 'text-dark', 'border'));

                // Add active class to clicked button
                this.classList.add('active', 'bg-primary', 'text-white');
                this.classList.remove('bg-light', 'text-dark', 'border');

                const filterValue = this.getAttribute('data-filter');

                articleItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        item.style.animation = 'fadeInUp 0.5s ease-out';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
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
    });
</script>
@endpush

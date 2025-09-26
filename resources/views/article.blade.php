@extends('layouts.app')

@section('title', 'Articles - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">Articles & Insights</h1>
                    <p class="lead">Artikel terbaru seputar teknologi, development, dan industri</p>

                    <!-- Search Bar -->
                    <div class="mt-4">
                        <form action="{{ route('article') }}" method="GET">
                            <div class="input-group input-group-lg">
                                <input type="text" name="q" class="form-control" placeholder="Cari artikel..." aria-label="Search articles">
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

    <!-- Category Filter -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#" class="badge bg-primary text-white p-2 text-decoration-none active" data-filter="all">
                            All Articles
                        </a>
                        @foreach($categories as $category)
                        @if($category != 'All')
                        <a href="#" class="badge bg-light text-dark border p-2 text-decoration-none"
                           data-filter="{{ Str::slug($category) }}">
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
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    @foreach($articles as $article)
                    <div class="card border-0 shadow-sm mb-4 article-item"
                         data-category="{{ Str::slug($article['category']) }}">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $article['image'] }}" class="img-fluid h-100"
                                     style="object-fit: cover;" alt="{{ $article['title'] }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <span class="badge bg-primary">{{ $article['category'] }}</span>
                                        <small class="text-muted">{{ $article['read_time'] }}</small>
                                    </div>

                                    <h5 class="card-title fw-bold">
                                        <a href="{{ route('article.show', $article['id']) }}"
                                           class="text-decoration-none text-dark">
                                            {{ $article['title'] }}
                                        </a>
                                    </h5>

                                    <p class="card-text text-muted">{{ $article['excerpt'] }}</p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="author-info d-flex align-items-center">
                                            <div class="avatar-sm bg-light rounded-circle d-flex align-items-center justify-content-center me-2">
                                                <i class="bi-person text-primary"></i>
                                            </div>
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
                                            <span class="badge bg-light text-dark border">{{ $tag }}</span>
                                            @endforeach
                                            @if(count($article['tags']) > 2)
                                            <span class="badge bg-light text-dark border">+{{ count($article['tags']) - 2 }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Pagination -->
                    <nav aria-label="Article pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Popular Articles -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white border-0">
                            <h6 class="fw-bold mb-0">Popular Articles</h6>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                @foreach(array_slice($articles, 0, 3) as $popular)
                                <a href="#" class="list-group-item list-group-item-action border-0 px-0 py-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">{{ \Str::limit($popular['title'], 50) }}</h6>
                                    </div>
                                    <small class="text-muted">{{ $popular['read_time'] }}</small>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white border-0">
                            <h6 class="fw-bold mb-0">Categories</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($categories as $category)
                                @if($category != 'All')
                                <span class="badge bg-light text-dark border p-2">
                                    {{ $category }} <span class="text-muted">({{ rand(5, 20) }})</span>
                                </span>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="card border-0 shadow-sm bg-primary text-white">
                        <div class="card-body text-center">
                            <i class="bi-envelope display-4 mb-3"></i>
                            <h5 class="fw-bold">Stay Updated</h5>
                            <p class="mb-3">Dapatkan artikel terbaru langsung ke email Anda</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Your email address" required>
                                </div>
                                <button type="submit" class="btn btn-light w-100">Subscribe</button>
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
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ $featured['image'] }}" class="card-img-top" alt="{{ $featured['title'] }}">
                        <div class="card-body">
                            <span class="badge bg-warning text-dark mb-2">Featured</span>
                            <h5 class="card-title fw-bold">{{ $featured['title'] }}</h5>
                            <p class="card-text">{{ $featured['excerpt'] }}</p>
                            <a href="{{ route('article.show', $featured['id']) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Category filter functionality
        const filterBadges = document.querySelectorAll('[data-filter]');
        const articleItems = document.querySelectorAll('.article-item');

        filterBadges.forEach(badge => {
            badge.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active class from all badges
                filterBadges.forEach(b => b.classList.remove('active', 'bg-primary', 'text-white'));
                filterBadges.forEach(b => b.classList.add('bg-light', 'text-dark'));

                // Add active class to clicked badge
                this.classList.remove('bg-light', 'text-dark');
                this.classList.add('active', 'bg-primary', 'text-white');

                const filter = this.dataset.filter;

                // Filter articles
                articleItems.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush

@push('styles')
<style>
    .article-item {
        transition: transform 0.3s ease;
    }

    .article-item:hover {
        transform: translateY(-2px);
    }

    .avatar-sm {
        width: 32px;
        height: 32px;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
    }
</style>
@endpush

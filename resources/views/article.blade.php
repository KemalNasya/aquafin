@extends('layouts.app')

@section('title', 'Artikel - Pereng Mina GAP')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden"
             style="min-height: 88vh;
                    background: url('{{ asset('assets/kolam.jpg') }}') center/cover no-repeat;
                    display: flex;
                    align-items: center;">
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay"></div>
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: url('{{ asset('assets/kolam.jpg') }}') center/cover no-repeat;
                     filter: brightness(60%); z-index: -1;"></div>
        <div class="container position-relative text-center text-white py-5" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="display-4 fw-bolder mb-4 text-shadow-dark"
                        style="animation: fadeInUp 1s ease-out; color: #fff; letter-spacing: 1px;">
                        Artikel & Wawasan
                    </h1>
                    <p class="lead fs-5 mb-5 text-shadow-dark opacity-75"
                       style="animation: fadeInUp 1.5s ease-out; color: #fff;">
                        Temukan informasi terbaru seputar kegiatan dan perkembangan di Pereng Mina GAP
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Articles Section -->
    <section class="py-5 section-padding" id="articles-list">
        <div class="container">
            <div class="row">
                <!-- Articles List -->
                <div class="col-lg-8">
                    @if(count($articles) > 0)
                        @foreach($articles as $article)
                            <div class="card border-0 shadow-sm mb-5 article-item rounded-3 overflow-hidden card-hover"
                                 data-category="{{ Str::slug($article['category']) }}"
                                 style="animation: fadeInUp {{ $loop->index * 0.1 + 1 }}s ease-out;">
                                <div class="row g-0">
                                    <div class="col-md-4 position-relative">
                                        <img src="{{ $article['image'] }}" class="img-fluid hover-scale"
                                             style="object-fit: cover; height: 200px; width: 100%;"
                                             alt="{{ $article['title'] }}">
                                        <div class="position-absolute top-0 start-0 m-3">
                                            <span class="badge bg-gradient-primary px-3 py-2">{{ $article['category'] }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body d-flex flex-column h-100 p-4">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <small class="text-muted">
                                                    <i class="far fa-clock me-1"></i>{{ $article['read_time'] }}
                                                </small>
                                                <small class="text-muted">
                                                    <i class="far fa-calendar me-1"></i>{{ $article['published_at']->locale('id')->isoFormat('D MMMM Y') }}
                                                </small>
                                            </div>
                                            <h5 class="card-title fw-bold mb-3">
                                                <a href="{{ route('article.show', $article['slug']) }}"
                                                   class="text-decoration-none text-dark hover-link stretched-link">
                                                    {{ $article['title'] }}
                                                </a>
                                            </h5>
                                            <p class="card-text text-muted flex-grow-1 mb-3">{{ $article['excerpt'] }}</p>
                                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                                <div class="tags">
                                                    @foreach(array_slice($article['tags'], 0, 2) as $tag)
                                                        <span class="badge bg-light text-dark border rounded-pill me-1">{{ $tag }}</span>
                                                    @endforeach
                                                    @if(count($article['tags']) > 2)
                                                        <span class="badge bg-light text-dark border rounded-pill">+{{ count($article['tags']) - 2 }}</span>
                                                    @endif
                                                </div>
                                                <span class="text-primary fw-medium">Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <nav class="pagination-modern justify-content-center mt-5" style="animation: fadeInUp 2s ease-out;">
                            {{ $articles->links() }}
                        </nav>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-newspaper fa-4x text-muted mb-3"></i>
                            <h4 class="text-muted mb-3">Belum ada artikel tersedia</h4>
                            <p class="text-muted">Silakan kembali lagi nanti untuk melihat artikel terbaru.</p>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Popular Articles -->
                    <div class="card border-0 shadow-sm mb-4 rounded-3 overflow-hidden card-hover"
                         style="animation: fadeInUp 1.5s ease-out;">
                        <div class="card-header bg-gradient-primary border-0 py-3">
                            <h6 class="fw-bold mb-0 text-white">
                                <i class="fas fa-fire text-warning me-2"></i>Artikel Terpopuler
                            </h6>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                @foreach($articles->take(3) as $popular)
                                    <a href="{{ route('article.show', $popular['slug']) }}"
                                       class="list-group-item list-group-item-action border-0 px-3 py-3 hover-lift d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 fw-bold text-dark">{{ \Str::limit($popular['title'], 50) }}</h6>
                                            <small class="text-muted">
                                                <i class="far fa-calendar me-1"></i>{{ \Carbon\Carbon::parse($popular['published_at'])->locale('id')->isoFormat('D MMMM Y') }}
                                            </small>
                                        </div>
                                        <span class="badge bg-gradient-primary ms-2">{{ $popular['read_time'] }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="card border-0 shadow-sm mb-4 rounded-3 overflow-hidden card-hover"
                         style="animation: fadeInUp 1.7s ease-out;">
                        <div class="card-header bg-gradient-primary border-0 py-3">
                            <h6 class="fw-bold mb-0 text-white">
                                <i class="fas fa-tags me-2"></i>Kategori
                            </h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($categories as $category)
                                    <a href="#"
                                       class="badge bg-light text-dark border p-2 rounded-pill hover-lift text-decoration-none"
                                       data-category="{{ Str::slug($category->name) }}">
                                        {{ $category->name }} <span class="text-muted">({{ $category->posts_count }})</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Old Articles Section -->
    <section class="py-5" style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">Artikel Lampau</h2>
                <p class="text-white-50">Artikel yang sudah lama dipublikasikan</p>
            </div>
            <div class="row">
                @php
                    $oldArticles = collect($articles->items())->filter(function($article) {
                        return \Carbon\Carbon::parse($article['published_at'])->lt(now()->subWeek());
                    })->take(6);
                @endphp
                @if($oldArticles->count() > 0)
                    @foreach($oldArticles as $index => $oldArticle)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-0 shadow-sm h-100 rounded-3 overflow-hidden card-hover"
                                 style="animation: fadeInUp {{ $index * 0.1 + 2.5 }}s ease-out;">
                                <div class="position-relative">
                                    <img src="{{ $oldArticle['image'] }}" class="card-img-top"
                                         alt="{{ $oldArticle['title'] }}" style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute top-0 start-0 m-3">
                                        <span class="badge bg-gradient-primary">{{ $oldArticle['category'] }}</span>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <small class="text-muted">
                                            <i class="far fa-clock me-1"></i>{{ $oldArticle['read_time'] }}
                                        </small>
                                        <small class="text-muted">
                                            <i class="far fa-calendar me-1"></i>{{ \Carbon\Carbon::parse($oldArticle['published_at'])->locale('id')->isoFormat('D MMMM Y') }}
                                        </small>
                                    </div>
                                    <h6 class="card-title fw-bold text-dark mb-2" style="font-size: 0.95rem; line-height: 1.3;">
                                        <a href="{{ route('article.show', $oldArticle['slug']) }}"
                                           class="text-decoration-none text-dark hover-link stretched-link">
                                            {{ Str::limit($oldArticle['title'], 60) }}
                                        </a>
                                    </h6>
                                    <p class="card-text text-muted small flex-grow-1" style="font-size: 0.85rem; line-height: 1.4;">
                                        {{ Str::limit($oldArticle['excerpt'], 100) }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="tags">
                                            @if(count($oldArticle['tags']) > 0)
                                                <span class="badge bg-light text-dark border rounded-pill">{{ $oldArticle['tags'][0] }}</span>
                                            @endif
                                        </div>
                                        <span class="text-primary fw-medium small">Baca <i class="fas fa-arrow-right ms-1"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center text-white py-4">
                        <i class="fas fa-archive fa-2x mb-3 opacity-50"></i>
                        <p>Belum ada artikel lampau tersedia.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

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

        .hero-section {
            background: none !important;
        }

        .hero-overlay {
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.85) 100%);
            opacity: 1;
            z-index: 1;
        }

        .text-shadow-dark {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

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
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%) !important;
            color: #fff;
        }

        .badge.bg-gradient-primary {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%) !important;
            border: none;
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

        .btn-success {
            background: linear-gradient(90deg, #198754 0%, #157347 100%);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .card-title, .card-body h5, .card-body h6 {
            color: #2c3e50 !important;
        }

        .card-text {
            color: #5a6c7d !important;
            line-height: 1.6;
        }

        .list-group-item h6 {
            color: #2c3e50 !important;
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: "";
        }

        .section-padding {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

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
            .card-body h5.card-title {
                font-size: 1.1rem;
            }
            .card .row.g-0 .col-md-4, .card .row.g-0 .col-md-8 {
                width: 100%;
            }
        }
    </style>
@endsection

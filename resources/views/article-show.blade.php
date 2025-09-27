@extends('layouts.app')

@section('title', $article['title'] . ' - Company Name')

@section('content')
    <!-- Article Header -->
    <section class="article-header position-relative overflow-hidden"
        style="height: 60vh; background: url('{{ $article['image'] }}'); center/contain no-repeat fixed; display: flex; align-items: center;">
        <!-- Overlay -->
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <span class="badge bg-primary text-white mb-3 px-3 py-2 rounded-pill">{{ $article['category'] }}</span>
                    <h1 class="display-4 fw-bold mb-4"
                        style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7); animation: fadeInUp 1s ease-out;">
                        {{ $article['title'] }}</h1>
                    <div class="d-flex justify-content-center align-items-center gap-4 mb-4">
                        <div class="d-flex align-items-center">
                            <span class="fw-bold">{{ $article['author'] }}</span>
                        </div>
                        <span class="text-muted">•</span>
                        <span>{{ $article['published_at'] }}</span>
                        <span class="text-muted">•</span>
                        <span>{{ $article['read_time'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="py-5 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="article-content bg-white p-4 rounded-3 shadow-sm"
                        style="animation: fadeInUp 1.5s ease-out;">
                        {!! $article['content'] !!}
                    </div>

                    <!-- Article Footer -->
                    <div class="article-footer mt-5 pt-4 border-top">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="tags">
                                @if (count($article['tags']) > 0)
                                    <span class="text-muted me-2">Tags:</span>
                                    @foreach ($article['tags'] as $tag)
                                        <span
                                            class="badge bg-light text-dark border rounded-pill me-1">{{ $tag }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="share-buttons">
                                <span class="text-muted me-2">Share:</span>
                                <a href="#" class="text-primary me-2" title="Share on Facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-info me-2" title="Share on Twitter"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#" class="text-danger" title="Share on Pinterest"><i
                                        class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Back to Articles -->
                    <div class="text-center mt-5">
                        <a href="{{ route('article') }}" class="btn btn-outline-primary rounded-pill px-4 py-2">
                            <i class="fas fa-arrow-left me-2"></i>Back to Articles
                        </a>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Popular Articles -->
                    <div class="card border-0 shadow-sm mb-4 rounded-3 overflow-hidden card-hover"
                        style="animation: fadeInUp 1.5s ease-out;">
                        <div class="card-header bg-white border-0">
                            <h6 class="fw-bold mb-0 text-primary"><i class="fas fa-clock text-info me-2"></i>Latest Articles
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                @foreach ($relatedPosts->take(3) as $popular)
                                    <a href="{{ route('article.show', $popular['id']) }}"
                                        class="list-group-item list-group-item-action border-0 px-0 py-3 hover-lift">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1 fw-bold">{{ \Str::limit($popular['title'], 50) }}</h6>
                                            <small class="badge bg-gradient-primary">{{ $popular['read_time'] ?? '5 min' }}</small>
                                        </div>
                                        <small class="text-muted"><i
                                                class="fas fa-calendar me-1"></i>{{ \Carbon\Carbon::parse($popular['published_at'] ?? now())->format('M d, Y') }}</small>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="card border-0 shadow-sm mb-4 rounded-3 overflow-hidden card-hover"
                        style="animation: fadeInUp 1.7s ease-out;">
                        <div class="card-header bg-white border-0">
                            <h6 class="fw-bold mb-0 text-primary"><i class="fas fa-tags me-2"></i>Categories</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-2">
                                @if(isset($categories))
                                    @foreach ($categories as $category)
                                        <span class="badge bg-light text-dark border p-2 rounded-pill hover-lift">
                                            {{ $category->name }} <span
                                                class="text-muted">({{ $category->posts_count }})</span>
                                        </span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Related Articles</h2>
                <p class="text-muted">More articles you might like</p>
            </div>
            <div class="row">
                @if ($relatedPosts->count() > 0)
                    @foreach ($relatedPosts as $index => $related)
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm h-100 rounded-3 overflow-hidden card-hover"
                                style="animation: fadeInUp {{ ($index + 1) * 0.2 }}s ease-out;">
                                <img src="{{ $related['image'] }}" class="card-img-top" alt="{{ $related['title'] }}"
                                    style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <span class="badge bg-primary text-white mb-2">{{ $related['category'] }}</span>
                                    <h5 class="card-title fw-bold">{{ Str::limit($related['title'], 50) }}</h5>
                                    <p class="card-text text-muted">{{ $related['excerpt'] }}</p>
                                    <a href="{{ route('article.show', $related['id']) }}"
                                        class="btn btn-primary rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p class="text-muted">No related articles found.</p>
                    </div>
                @endif
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
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15) !important;
        }

        .article-content {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .article-content h1,
        .article-content h2,
        .article-content h3,
        .article-content h4,
        .article-content h5,
        .article-content h6 {
            color: #333;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .article-content p {
            margin-bottom: 1.5rem;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 1.5rem 0;
        }

        .article-content blockquote {
            border-left: 4px solid #007bff;
            padding-left: 1rem;
            margin: 2rem 0;
            font-style: italic;
            color: #666;
        }

        .share-buttons a {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .share-buttons a:hover {
            transform: scale(1.2);
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
    </style>
@endsection

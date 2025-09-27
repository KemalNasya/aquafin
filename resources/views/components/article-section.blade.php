<section id="articles" class="section-padding py-5 py-md-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary mb-3">Artikel Terbaru</h2>
            <p class="lead text-muted">Temukan wawasan dan pengetahuan terbaru dari tim kami</p>
        </div>

        <div class="row g-4">
            @foreach($featuredArticles as $article)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                    <img src="{{ $article['image'] }}" class="card-img-top" alt="{{ $article['title'] }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-gradient-primary">{{ $article['category'] }}</span>
                            <small class="text-muted">{{ $article['read_time'] }}</small>
                        </div>
                        <h5 class="card-title fw-bold">
                            <a href="{{ route('article.show', $article['id']) }}" class="text-decoration-none text-dark hover-link">
                                {{ $article['title'] }}
                            </a>
                        </h5>
                        <p class="card-text text-muted">{{ $article['excerpt'] }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-user me-1"></i>{{ $article['author'] }}
                            </small>
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>{{ $article['published_at'] }}
                            </small>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <a href="{{ route('article.show', $article['id']) }}" class="btn btn-gradient btn-sm"><i class="fas fa-arrow-right me-1"></i>Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('article') }}" class="btn btn-gradient btn-lg px-4 py-3 shadow-lg"><i class="fas fa-list me-2"></i>Lihat Semua Tips Budidaya</a>
        </div>
    </div>

    <!-- Custom CSS -->
    <style>
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            transition: all 0.3s ease;
        }
        .hover-link:hover {
            color: #007bff !important;
        }
        .badge.bg-gradient-primary {
            background: linear-gradient(45deg, #007bff, #00bcd4);
            color: white;
        }
        .btn-gradient {
            background: linear-gradient(45deg, #007bff, #00bcd4);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-gradient:hover {
            background: linear-gradient(45deg, #0056b3, #0097a7);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
        }
    </style>
</section>

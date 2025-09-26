<section id="articles" class="section-padding bg-light-custom">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Artikel Terbaru</h2>
            <p class="lead text-muted">Temukan wawasan dan pengetahuan terbaru dari tim kami</p>
        </div>

        <div class="row">
            @php
                $featuredArticles = [
                    [
                        'id' => 1,
                        'title' => 'Pengenalan Microservices Architecture untuk Aplikasi Modern',
                        'excerpt' => 'Pelajari bagaimana microservices architecture dapat meningkatkan skalabilitas dan maintainability aplikasi Anda.',
                        'author' => 'John Doe',
                        'published_at' => '2024-01-20',
                        'category' => 'Architecture',
                        'read_time' => '8 min read',
                        'image' => 'https://via.placeholder.com/400x250'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Optimasi Database untuk Aplikasi Web yang Scalable',
                        'excerpt' => 'Teknik-teknik optimasi database yang dapat meningkatkan performa aplikasi web secara signifikan.',
                        'author' => 'Jane Smith',
                        'published_at' => '2024-01-18',
                        'category' => 'Database',
                        'read_time' => '6 min read',
                        'image' => 'https://via.placeholder.com/400x250'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Implementasi CI/CD Pipeline dengan GitLab',
                        'excerpt' => 'Panduan lengkap implementasi Continuous Integration dan Continuous Deployment menggunakan GitLab CI/CD.',
                        'author' => 'Mike Johnson',
                        'published_at' => '2024-01-15',
                        'category' => 'DevOps',
                        'read_time' => '10 min read',
                        'image' => 'https://via.placeholder.com/400x250'
                    ]
                ];
            @endphp

            @foreach($featuredArticles as $article)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 card-hover">
                    <img src="{{ $article['image'] }}" class="card-img-top" alt="{{ $article['title'] }}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-primary">{{ $article['category'] }}</span>
                            <small class="text-muted">{{ $article['read_time'] }}</small>
                        </div>
                        <h5 class="card-title fw-bold">
                            <a href="{{ route('article.show', $article['id']) }}" class="text-decoration-none text-dark">
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
                    <div class="card-footer bg-transparent">
                        <a href="{{ route('article.show', $article['id']) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('article') }}" class="btn btn-outline-primary btn-lg">Lihat Semua Artikel</a>
        </div>
    </div>
</section>

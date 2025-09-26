<section id="articles" class="section-padding bg-light-custom py-5 py-md-5">
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
                        'title' => 'Panduan Budidaya Ikan Nila di Kolam Bioflok',
                        'excerpt' => 'Teknik budidaya modern menggunakan sistem bioflok untuk hasil panen yang lebih efisien dan ramah lingkungan.',
                        'author' => 'Dr. Agus Santoso',
                        'published_at' => '2024-01-20',
                        'category' => 'Budidaya',
                        'read_time' => '8 min read',
                        'image' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Manfaat Aquaponik untuk Pertanian Terpadu',
                        'excerpt' => 'Integrasi budidaya ikan dan tanaman hidroponik untuk produksi berkelanjutan dan minim limbah.',
                        'author' => 'Siti Nurhaliza',
                        'published_at' => '2024-01-18',
                        'category' => 'Teknologi',
                        'read_time' => '6 min read',
                        'image' => 'https://images.unsplash.com/photo-1611093563242-3fd9220a4e2e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Pencegahan Penyakit pada Ikan Lele',
                        'excerpt' => 'Strategi pengelolaan kesehatan ikan untuk mengurangi kerugian dan meningkatkan kualitas hasil budidaya.',
                        'author' => 'Budi Hartono',
                        'published_at' => '2024-01-15',
                        'category' => 'Kesehatan Ikan',
                        'read_time' => '10 min read',
                        'image' => 'https://images.unsplash.com/photo-1501436513145-30f24e19fcc6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
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
            <a href="{{ route('article') }}" class="btn btn-outline-primary btn-lg">Lihat Semua Tips Budidaya</a>
        </div>
    </div>
</section>

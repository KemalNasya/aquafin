<section id="gallery" class="section-padding py-5 py-md-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Galeri Kegiatan</h2>
            <p class="lead text-muted">Koleksi foto dan dokumentasi visual dari berbagai kegiatan dan event kami</p>
        </div>

        <div class="row">
            @php
                $galleryCategories = [
                    [
                        'name' => 'Kolam dan Fasilitas',
                        'image' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                        'description' => 'Foto kolam budidaya dan infrastruktur peternakan ikan',
                        'count' => 45
                    ],
                    [
                        'name' => 'Proses Budidaya',
                        'image' => 'https://images.unsplash.com/photo-1611093563242-3fd9220a4e2e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                        'description' => 'Dokumentasi tahapan pemberian pakan dan pemantauan ikan',
                        'count' => 38
                    ],
                    [
                        'name' => 'Hasil Panen',
                        'image' => 'https://images.unsplash.com/photo-1501436513145-30f24e19fcc6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                        'description' => 'Gambar ikan segar hasil panen dan pengolahan',
                        'count' => 52
                    ]
                ];
            @endphp

            @foreach($galleryCategories as $category)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm card-hover gallery-card">
                    <div class="card-img-container">
                        <img src="{{ $category['image'] }}" class="card-img-top" alt="{{ $category['name'] }}">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <div class="text-center text-white">
                                <i class="bi bi-images display-4 mb-2"></i>
                                <h5 class="fw-bold">{{ $category['count'] }} Foto</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $category['name'] }}</h5>
                        <p class="card-text text-muted">{{ $category['description'] }}</p>
                        <a href="{{ route('gallery') }}" class="btn btn-primary btn-sm">
                            <i class="bi-images me-1"></i> Lihat Galeri
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="bg-light rounded p-4 text-center">
                    <h4 class="fw-bold mb-3">Ingin Melihat Lebih Banyak?</h4>
                    <p class="text-muted mb-4">Jelajahi koleksi foto lengkap dari semua kegiatan kami</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-primary">
                            <i class="bi-camera me-2"></i> Foto Terbaru
                        </a>
                        <a href="{{ route('gallery') }}" class="btn btn-primary">
                            <i class="bi-grid me-2"></i> Semua Galeri
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('gallery') }}" class="btn btn-outline-primary btn-lg">
                <i class="bi-images me-2"></i> Jelajahi Galeri Budidaya
            </a>
        </div>
    </div>
</section>

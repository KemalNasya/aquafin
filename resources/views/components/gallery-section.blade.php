<section id="gallery" class="section-padding py-5 py-md-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary mb-3">Galeri Terbaru</h2>
            <p class="lead text-muted">Koleksi foto terbaru dari kegiatan budidaya ikan kami</p>
        </div>

        <div class="row g-4">
            @foreach($latestPhotos as $photo)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                    <div class="position-relative">
                        <img src="{{ $photo['image'] }}" class="card-img-top" alt="{{ $photo['title'] }}" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-gradient-primary">{{ $photo['category'] }}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $photo['title'] }}</h5>
                        <p class="card-text text-muted small">
                            <i class="fas fa-calendar me-1"></i>{{ $photo['date'] }}
                        </p>
                        <a href="{{ route('gallery') }}" class="btn btn-gradient btn-sm"><i class="fas fa-eye me-1"></i>Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('gallery') }}" class="btn btn-gradient btn-lg px-4 py-3 shadow-lg"><i class="fas fa-images me-2"></i>Lihat Semua Galeri</a>
        </div>
    </div>

    <!-- Custom CSS -->
    <style>
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            transition: all 0.3s ease;
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

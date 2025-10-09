<section id="gallery" class="section-padding py-5 py-md-5" 
    style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%); border-bottom: 2px solid rgba(255,255,255,0.2); transition: all 0.3s ease;">
    <div class="container">
        <div class="text-center mb-5">
            {{-- Mengubah teks menjadi putih agar kontras dengan latar belakang gelap --}}
            <h2 class="fw-bold text-white mb-3">Galeri Terbaru</h2>
            <p class="lead text-light">Koleksi foto terbaru dari kegiatan budidaya ikan kami</p>
        </div>

        <div class="row g-4">
            @foreach($latestPhotos as $photo)
            <div class="col-lg-4 col-md-6">
                {{-- Tambahkan class bg-white agar card tetap putih dan teks di dalamnya terbaca --}}
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover bg-white">
                    <div class="position-relative">
                        <img src="{{ $photo['image'] }}" class="card-img-top" alt="{{ $photo['title'] }}" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-gradient-primary">{{ $photo['category'] }}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark">{{ $photo['title'] }}</h5>
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

    <style>
        /* Mengganti warna gradien tombol dan badge agar sesuai dengan warna tema biru tua */
        :root {
            --primary-blue-start: #0a2c4d;
            --primary-blue-end: #154e8d;
            --secondary-blue-light: #00bcd4; /* Warna biru muda/cyan yang sebelumnya digunakan */
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            transition: all 0.3s ease;
        }
        
        /* Mengganti gradien badge dengan perpaduan warna tema baru dan warna sekunder */
        .badge.bg-gradient-primary {
            background: linear-gradient(45deg, var(--primary-blue-end), var(--secondary-blue-light)) !important;
            color: white;
        }
        
        /* Mengganti gradien tombol dengan perpaduan warna tema baru dan warna sekunder */
        .btn-gradient {
            background: linear-gradient(45deg, var(--primary-blue-end), var(--secondary-blue-light)) !important;
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            background: linear-gradient(45deg, var(--primary-blue-start), var(--secondary-blue-light)) !important;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 44, 77, 0.5); /* Shadow dibuat lebih gelap */
        }
    </style>
</section>
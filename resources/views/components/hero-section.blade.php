<section class="hero-section position-relative overflow-hidden"
    style="min-height: 100vh; display: flex; align-items: center;">
    <img src="{{ asset('assets/hero.jpg') }}" alt="Background" class="position-absolute top-0 start-0 w-100 h-100"
        style="object-fit: cover; z-index: -1;">
    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100"></div>
    <div class="container position-relative text-center text-white">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-2 fw-bold mb-4"
                    style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7); animation: fadeInUp 1s ease-out;">Ikan Segar
                    Berkualitas Tinggi</h1>
                <p class="lead fs-3 mb-5"
                    style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 1.5s ease-out;">Dari laut yang
                    biru, kami hadirkan ikan segar melalui budidaya modern yang ramah lingkungan, untuk kesehatan Anda
                    dan planet kita.</p>
                <div class="hero-buttons d-flex justify-content-center gap-3">
                    <a href="{{ route('about') }}" class="btn btn-primary btn-lg px-5 py-3 fs-5 shadow-lg"
                        style="animation: fadeInUp 2s ease-out;"><i class="fas fa-info-circle me-2"></i>Pelajari Lebih
                        Lanjut</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-5 py-3 fs-5 shadow-lg"
                        style="animation: fadeInUp 2.5s ease-out;"><i class="fas fa-envelope me-2"></i>Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Custom CSS for animations -->
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
    </style>
</section>

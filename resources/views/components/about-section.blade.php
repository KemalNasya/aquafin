<section id="about" class="section-padding py-5 py-md-5 position-relative overflow-hidden" style="background: #ffff;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" style="animation: slideInLeft 1s ease-out;">
                <img src="{{ asset('assets/2.jpg') }}" alt="Sejarah Budidaya" class="img-fluid rounded shadow-lg hover-scale">
            </div>
            <div class="col-lg-6" style="animation: fadeInUp 1.2s ease-out;">
                <h2 class="fw-bold mb-4 text-primary" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">Sejarah Kami</h2>
                <p class="lead mb-4 text-dark">Didirikan sejak tahun 2010, kami telah berkembang menjadi pemimpin dalam budidaya ikan berkelanjutan di Indonesia, dengan fokus pada inovasi dan pelestarian lingkungan.</p>
                <div class="about-features">
                    <div class="feature-item d-flex mb-3 p-3 rounded shadow-sm hover-lift">
                        <i class="fas fa-fish text-primary me-3 mt-1 fs-4"></i>
                        <div>
                            <h5 class="text-primary">Budidaya Berkelanjutan</h5>
                            <p class="text-muted mb-0">Metode ramah lingkungan untuk menjaga ekosistem air dan tanah.</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex mb-3 p-3 rounded shadow-sm hover-lift">
                        <i class="fas fa-users text-primary me-3 mt-1 fs-4"></i>
                        <div>
                            <h5 class="text-primary">Tim Ahli Aquakultur</h5>
                            <p class="text-muted mb-0">Didukung oleh petani dan ilmuwan berpengalaman dalam spesies ikan lokal.</p>
                        </div>
                    </div>
                    <div class="feature-item d-flex mb-3 p-3 rounded shadow-sm hover-lift">
                        <i class="fas fa-leaf text-primary me-3 mt-1 fs-4"></i>
                        <div>
                            <h5 class="text-primary">Teknologi Hijau</h5>
                            <p class="text-muted mb-0">Sistem aerasi dan filtrasi modern untuk hasil panen optimal.</p>
                        </div>
                    </div>
                </div>
                <a href="/about" class="btn btn-gradient btn-lg mt-3 shadow" style="animation: fadeInUp 1.5s ease-out;"><i class="fas fa-arrow-right me-2"></i>Selengkapnya</a>
            </div>
        </div>
    </div>

    <!-- Custom CSS for animations and styles -->
    <style>
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            transition: all 0.3s ease;
        }
        .btn-gradient {
            background: linear-gradient(45deg, #2196F3, #21CBF3);
            border: none;
            color: white;
        }
        .btn-gradient:hover {
            background: linear-gradient(45deg, #1976D2, #00BCD4);
            color: white;
        }
    </style>
</section>

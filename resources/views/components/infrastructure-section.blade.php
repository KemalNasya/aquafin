<section id="infrastructure" class="section-padding py-5 py-md-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white mb-3">Standar dan Penawaran Kami</h2>
            <p class="lead text-light">Fasilitas budidaya ikan dengan standar tinggi dan varietas unggulan</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                    <img src="{{ asset('assets/template.jpg') }}" class="card-img-top" alt="Kolam Budidaya"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary fw-bold">Kolam Budidaya Modern</h5>
                        <p class="card-text text-muted">Standar tinggi dengan sistem aerasi dan filtrasi untuk kualitas
                            ikan optimal.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                    <img src="{{ asset('assets/template.jpg') }}" class="card-img-top" alt="Varietas Ikan"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary fw-bold">Varietas Ikan Unggulan</h5>
                        <p class="card-text text-muted">Penawaran ikan lokal seperti nila, lele, dan patin dengan hasil
                            panen berkualitas.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                    <img src="{{ asset('assets/template.jpg') }}" class="card-img-top" alt="Sertifikasi"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary fw-bold">Sertifikasi Kualitas</h5>
                        <p class="card-text text-muted">Sertifikat halal dan ramah lingkungan untuk jaminan mutu produk
                            ikan kami.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="/infrastructure" class="btn btn-gradient btn-lg px-4 py-3 shadow-lg"><i
                    class="fas fa-arrow-right me-2"></i>Lihat Semua Fasilitas</a>
        </div>
    </div>

    <style>
        /* CSS yang diperbarui untuk gradasi baru */
        #infrastructure {
            /* Gradasi Biru Tua Horizontal yang baru */
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            border-bottom: 2px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
            transition: all 0.3s ease;
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
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }
    </style>
</section>
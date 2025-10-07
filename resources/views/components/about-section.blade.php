<section id="about" class="section-padding py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" style="animation: slideInLeft 1s ease-out;">
                <img src="{{ asset('assets/template.jpg') }}" alt="Sejarah Budidaya"
                    class="img-fluid rounded shadow-lg hover-scale"
                    style="border: 4px solid rgba(255,255,255,0.2);">
            </div>

            <div class="col-lg-6" style="animation: fadeInUp 1.2s ease-out;">
                <h2 class="fw-bold mb-3 text-white"
                    style="font-size: 1.8rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); letter-spacing: 0.5px;">
                    Sejarah Kami
                </h2>
                <p class="lead mb-4" style="color: #e0f2ff; font-size: 1rem; line-height: 1.6;">
                    Didirikan sejak tahun 2010, kami telah berkembang menjadi pemimpin dalam
                    budidaya ikan berkelanjutan di Indonesia, dengan fokus pada inovasi dan pelestarian lingkungan.
                </p>

                <div class="about-features">
                    <div class="feature-item d-flex mb-3 p-3 rounded shadow-sm hover-lift"
                        style="background: rgba(255, 255, 255, 0.1);">
                        <i class="fas fa-fish text-info me-3 mt-1 fs-5"></i>
                        <div>
                            <h5 class="text-white mb-1" style="font-size: 1.05rem;">Budidaya Berkelanjutan</h5>
                            <p class="mb-0" style="color: #d0ecff; font-size: 0.9rem;">
                                Metode ramah lingkungan untuk menjaga ekosistem air dan tanah.
                            </p>
                        </div>
                    </div>

                    <div class="feature-item d-flex mb-3 p-3 rounded shadow-sm hover-lift"
                        style="background: rgba(255, 255, 255, 0.1);">
                        <i class="fas fa-users text-info me-3 mt-1 fs-5"></i>
                        <div>
                            <h5 class="text-white mb-1" style="font-size: 1.05rem;">Tim Ahli Aquakultur</h5>
                            <p class="mb-0" style="color: #d0ecff; font-size: 0.9rem;">
                                Didukung oleh petani dan ilmuwan berpengalaman dalam spesies ikan lokal.
                            </p>
                        </div>
                    </div>

                    <div class="feature-item d-flex mb-3 p-3 rounded shadow-sm hover-lift"
                        style="background: rgba(255, 255, 255, 0.1);">
                        <i class="fas fa-leaf text-info me-3 mt-1 fs-5"></i>
                        <div>
                            <h5 class="text-white mb-1" style="font-size: 1.05rem;">Teknologi Hijau</h5>
                            <p class="mb-0" style="color: #d0ecff; font-size: 0.9rem;">
                                Sistem aerasi dan filtrasi modern untuk hasil panen optimal.
                            </p>
                        </div>
                    </div>
                </div>

                <a href="/about" class="btn btn-gradient btn-lg mt-3 shadow"
                    style="animation: fadeInUp 1.5s ease-out; font-size: 0.95rem; padding: 0.6rem 1.4rem;">
                    <i class="fas fa-arrow-right me-2"></i>Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <style>
        /* Perubahan utama: Menerapkan gradasi biru tua pada section #about */
        #about {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            border-bottom: 2px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
            color: white; /* Memastikan warna teks tetap putih */
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

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

        .hover-scale:hover {
            transform: scale(1.05);
            transition: all 0.4s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2) !important;
            transition: all 0.3s ease;
        }

        .btn-gradient {
            background: linear-gradient(45deg, #00aaff, #007bff);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(45deg, #0088cc, #005ce6);
            color: white;
            transform: translateY(-2px);
        }

        /* Efek glowing lembut */
        .feature-item:hover {
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 15px rgba(0, 174, 255, 0.3);
            transition: all 0.3s ease;
        }

        /* Responsif di layar kecil */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.4rem !important;
            }

            p.lead {
                font-size: 0.9rem !important;
                line-height: 1.5;
            }

            .feature-item h5 {
                font-size: 0.95rem !important;
            }

            .feature-item p {
                font-size: 0.85rem !important;
            }

            .btn-gradient {
                font-size: 0.85rem !important;
                padding: 0.5rem 1.1rem !important;
            }
        }
    </style>
</section>
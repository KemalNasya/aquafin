<section id="about" class="section-padding py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <!-- Gambar -->
            <div class="col-lg-6 mb-4 mb-lg-0" style="animation: slideInLeft 1s ease-out;">
                <img src="{{ asset('assets/logo_PMGAP.png') }}" alt="Sejarah Budidaya"
                    class="img-fluid rounded shadow-lg hover-scale"
                    style="border: 4px solid rgba(255,255,255,0.2);">
            </div>

            <!-- Konten -->
            <div class="col-lg-6 text-white" style="animation: fadeInUp 1.2s ease-out;">
                <h1 class="fw-bold mb-3" 
                    style="font-size: 2.2rem; text-shadow: 0 3px 10px rgba(0,0,0,0.8);">
                    Tentang Pereng Mina GAP
                </h1>

                <p class="lead mb-4" 
                    style="font-size: 1.05rem; line-height: 1.6; text-shadow: 0 2px 8px rgba(0,0,0,0.7);">
                    Kelompok Pereng Mina GAP merupakan pelopor dalam pengelolaan dan budidaya ikan secara berkelanjutan. 
                    Kami berfokus pada peningkatan kualitas produksi, efisiensi sumber daya, dan pemberdayaan masyarakat 
                    melalui inovasi serta transparansi dokumentasi kegiatan budidaya ikan.
                </p>

                <a href="/about" class="btn btn-gradient px-4 py-2 fs-6 mt-2 shadow"
                    style="animation: fadeInUp 1.5s ease-out;">
                    <i class="fas fa-arrow-right me-2"></i>Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <style>
        /* Latar belakang gradasi biru */
        #about {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            border-bottom: 2px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
            color: white;
        }

        /* Animasi */
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

        /* Hover efek */
        .hover-scale:hover {
            transform: scale(1.05);
            transition: all 0.4s ease;
        }

        /* Tombol gradasi */
        .btn-gradient {
            background: linear-gradient(45deg, #00aaff, #007bff);
            border: none;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(45deg, #0088cc, #005ce6);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        /* Responsif */
        @media (max-width: 768px) {
            #about h1 {
                font-size: 1.6rem !important;
            }

            #about p {
                font-size: 0.9rem !important;
                line-height: 1.5;
            }

            .btn-gradient {
                font-size: 0.85rem !important;
                padding: 0.5rem 1.1rem !important;
            }
        }
    </style>
</section>

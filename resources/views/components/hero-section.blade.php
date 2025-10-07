<section class="hero-section position-relative overflow-hidden"
    style="min-height: 89vh; display: flex; align-items: center;">
    
    <img src="{{ asset('assets/benner.jpg') }}" alt="Background"
        class="position-absolute top-0 start-0 w-100 h-100"
        style="object-fit: cover; z-index: -2;">
    
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: rgba(0, 0, 0, **0.6**); z-index: -1;"></div>

    <div class="container position-relative text-center text-white">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="**display-4** fw-bold mb-4"
                    style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7); animation: fadeInUp 1s ease-out;">
                    Selamat Datang Di Pereng Mina GAP
                </h1>
                <p class="lead fs-3 mb-5"
                    style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 1.5s ease-out;">
                   Website ini merupakan sistem informasi yang mendokumentasikan kegiatan pengelolaan ikan dari Kelompok Pereng Mina. 
                   Kami berkomitmen untuk meningkatkan kualitas produksi, infrastruktur, dan transparansi dokumentasi dalam budidaya ikan.
                </p>
                <div class="hero-buttons d-flex justify-content-center gap-3">
                    <a href="{{ route('about') }}" class="btn btn-primary btn-lg px-5 py-3 fs-5 shadow-lg custom-gradient-button"
                        style="animation: fadeInUp 2s ease-out;">
                        <i class="fas fa-info-circle me-2"></i>Pelajari Lebih Lanjut
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-5 py-3 fs-5 shadow-lg"
                        style="animation: fadeInUp 2.5s ease-out;">
                        <i class="fas fa-envelope me-2"></i>Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Mengubah warna tombol primary default Bootstrap */
        .custom-gradient-button {
            /* Gradasi linear dari kiri atas ke kanan bawah */
            background: linear-gradient(135deg, #004085 0%, #002752 100%); 
            border-color: #002752; 
            color: white; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); 
        }

        /* Efek hover untuk tombol */
        .custom-gradient-button:hover {
            background: linear-gradient(135deg, #004d99 0%, #003366 100%); 
            border-color: #003366;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4); 
            transform: translateY(-2px); 
            transition: all 0.3s ease; 
        }

        /* Pastikan tombol tetap terlihat bagus saat active/focus (misal saat diklik) */
        .custom-gradient-button:active,
        .custom-gradient-button:focus {
            background: linear-gradient(135deg, #002752 0%, #004085 100%); 
            border-color: #002752;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2) inset; 
        }

        /* Animasi yang sudah ada */
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
<section class="hero-section position-relative overflow-hidden d-flex align-items-center justify-content-center"
    style="min-height: 88vh;">
    
    <!-- Gambar Background -->
    <img src="{{ asset('assets/jj.jpg') }}" alt="Background"
        class="position-absolute top-0 start-0 w-100 h-100"
        style="object-fit: cover; z-index: -2; filter: brightness(60%) contrast(110%);">

    <!-- Overlay gradient lembut -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.7) 100%); z-index: -1;"></div>

    <!-- Konten -->
    <div class="container text-center text-white px-4">
        <h1 class="fw-bold mb-3" 
            style="font-size: 2.2rem; text-shadow: 0 4px 15px rgba(0,0,0,0.9); animation: fadeInUp 1s ease-out;">
            Selamat Datang Di Pereng Mina GAP
        </h1>

        <p class="lead mb-4 mx-auto" style="max-width: 750px; font-size: 1.05rem; line-height: 1.6;
            text-shadow: 0 2px 8px rgba(0,0,0,0.8); animation: fadeInUp 1.5s ease-out;">
            Website ini merupakan sistem informasi yang mendokumentasikan kegiatan pengelolaan ikan dari Kelompok Pereng Mina. 
            Kami berkomitmen untuk meningkatkan kualitas produksi, infrastruktur, dan transparansi dokumentasi dalam budidaya ikan.
        </p>

        <div class="hero-buttons d-flex justify-content-center gap-3">
    <a href="{{ route('about') }}"
        class="btn btn-primary px-4 py-2 fs-6 shadow custom-gradient-button"
        style="animation: fadeInUp 2s ease-out;">
        <i class="fas fa-info-circle me-2"></i>Pelajari Lebih Lanjut
    </a>
    <a href="{{ route('contact') }}"
        class="btn btn-outline-light px-4 py-2 fs-6 shadow"
        style="animation: fadeInUp 2.5s ease-out;">
        <i class="fas fa-envelope me-2"></i>Hubungi Kami
    </a>
</div>
    </div>

    <style>
        /* Tombol dengan efek gradasi */
        .custom-gradient-button {
            background: linear-gradient(135deg, #0056b3 0%, #002b80 100%);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .custom-gradient-button:hover {
            background: linear-gradient(135deg, #0070ff 0%, #0047b3 100%);
            transform: translateY(-3px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.4);
        }

        /* Animasi teks */
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

<footer class="text-white pt-5 pb-4 dark-blue-gradient-bg position-relative overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="pattern-dots position-absolute w-100 h-100 top-0 start-0 opacity-25"></div>
    <div class="footer-triangle-shape position-absolute bottom-0 start-0"></div>

    <div class="container position-relative">
        <div class="row">
            {{-- Kolom 1: CompanyName & Sosial Media --}}
            <div class="col-lg-4 col-md-6 mb-4">
                {{-- Judul diubah ke warna aksen kuning --}}
                <h5 class="fw-bold mb-3 text-yellow">CompanyName</h5>
                {{-- Teks diubah menjadi putih transparan --}}
                <p class="text-white-75 small">Perusahaan terdepan dalam menyediakan solusi infrastruktur berkualitas untuk masa depan yang lebih baik.</p>
                
                {{-- Sosial Media menggunakan gaya ikon lingkaran kuning --}}
                <div class="social-links d-flex gap-2 mt-3">
                    <a href="#" class="social-icon-circle text-yellow bg-transparent-white-border hover-yellow" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon-circle text-yellow bg-transparent-white-border hover-yellow" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon-circle text-yellow bg-transparent-white-border hover-yellow" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-icon-circle text-yellow bg-transparent-white-border hover-yellow" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            {{-- Kolom 2: Tautan Cepat --}}
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="fw-bold mb-3 text-yellow">Tautan Cepat</h5>
                <ul class="list-unstyled">
                    {{-- Tautan diubah ke warna putih transparan, hover ke kuning --}}
                    <li class="mb-2"><a href="/" class="text-white-75 text-decoration-none footer-link small">Beranda</a></li>
                    <li class="mb-2"><a href="/about" class="text-white-75 text-decoration-none footer-link small">Tentang</a></li>
                    <li class="mb-2"><a href="/infrastructure" class="text-white-75 text-decoration-none footer-link small">Infrastruktur</a></li>
                    <li class="mb-2"><a href="/contact" class="text-white-75 text-decoration-none footer-link small">Kontak</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Layanan --}}
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold mb-3 text-yellow">Layanan</h5>
                <ul class="list-unstyled">
                    {{-- Tautan diubah ke warna putih transparan, hover ke kuning --}}
                    <li class="mb-2"><a href="#" class="text-white-75 text-decoration-none footer-link small">Konsultasi</a></li>
                    <li class="mb-2"><a href="#" class="text-white-75 text-decoration-none footer-link small">Pengembangan</a></li>
                    <li class="mb-2"><a href="#" class="text-white-75 text-decoration-none footer-link small">Pemeliharaan</a></li>
                    <li class="mb-2"><a href="#" class="text-white-75 text-decoration-none footer-link small">Dukungan</a></li>
                </ul>
            </div>

            {{-- Kolom 4: Kontak --}}
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="fw-bold mb-3 text-yellow">Kontak</h5>
                <ul class="list-unstyled">
                    {{-- Ikon diubah ke warna kuning, teks ke putih transparan --}}
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-map-marker-alt text-yellow me-3 mt-1"></i>
                        <span class="text-white-75 small">Jl. Contoh No. 123, Jakarta</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-phone text-yellow me-3 mt-1"></i>
                        <span class="text-white-75 small">+62 21 1234 5678</span>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <i class="fas fa-envelope text-yellow me-3 mt-1"></i>
                        <span class="text-white-75 small">info@company.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="my-4 border-white-10">

        <div class="row align-items-center">
            <div class="col-md-6">
                {{-- Teks diubah ke putih transparan --}}
                <p class="mb-0 text-white-75 small">&copy; 2024 CompanyName. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                {{-- Tautan diubah ke putih transparan, hover ke kuning --}}
                <a href="#" class="text-white-75 text-decoration-none me-3 footer-link small">Privacy Policy</a>
                <a href="#" class="text-white-75 text-decoration-none footer-link small">Terms of Service</a>
            </div>
        </div>
    </div>

    <style>
        /* Vars dan Warna */
        :root {
            --yellow-color: #ffc107; /* Kuning/Emas untuk aksen */
        }
        
        /* Background Biru Gelap dengan Gradient */
        .dark-blue-gradient-bg {
            background: linear-gradient(135deg, #0d365e 0%, #001f3f 100%);
        }
        
        /* Warna Teks */
        .text-yellow {
            color: var(--yellow-color) !important;
        }
        .text-white-75 {
            color: rgba(255, 255, 255, 0.75) !important;
        }
        .border-white-10 {
            border-color: rgba(255, 255, 255, 0.1) !important;
        }

        /* Dekorasi: Pattern Dots */
        .pattern-dots {
            background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1.5px, transparent 0);
            background-size: 20px 20px;
            z-index: 1;
        }
        .container.position-relative {
            z-index: 2; /* Pastikan konten di atas pattern */
        }

        /* Dekorasi: Triangle Shape (di kiri bawah) */
        .footer-triangle-shape {
            width: 0; 
            height: 0; 
            border-top: 100px solid transparent; 
            border-left: 100px solid #0d365e; /* Warna sesuai gradient start */
            filter: brightness(1.2); 
            opacity: 0.5;
            position: absolute;
            bottom: 0;
            left: 0;
            transform: translateY(100%);
            z-index: 1;
        }

        /* Styling Ikon Sosial Media (Lingkaran Kuning) */
        .social-icon-circle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            font-size: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.5); /* Garis luar putih transparan */
            color: var(--yellow-color) !important; 
            transition: all 0.3s ease;
        }

        .social-icon-circle:hover {
            background-color: var(--yellow-color); 
            color: #001f3f !important; /* Ikon gelap saat hover */
            border-color: var(--yellow-color);
            transform: translateY(-2px);
        }
        
        /* Styling Tautan */
        .footer-link {
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            color: var(--yellow-color) !important; /* Warna Kuning saat hover */
            transform: translateX(3px);
        }
    </style>
</footer>
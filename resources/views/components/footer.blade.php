<footer class="text-white dark-blue-gradient-bg position-relative overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="pattern-dots position-absolute w-100 h-100 top-0 start-0 opacity-25"></div>
    <div class="footer-triangle-shape position-absolute bottom-0 start-0"></div>

    <div class="container position-relative">
        <div class="row g-3 py-4"> {{-- Reduced gap and padding --}}
            {{-- Kolom 1: CompanyName & Sosial Media --}}
            <div class="col-xl-4 col-lg-4 col-md-6 mb-3">
                <h5 class="fw-bold mb-2 text-yellow">Pereng Mina Gap</h5>
                <p class="text-white-75 small mb-3">Website dokumentasi kegiatan Kelompok Budidaya Ikan Pereng Mina GAP</p>

                <div class="social-links d-flex gap-2 mt-3">
                    <!-- Social media icons can be added here -->
                </div>
            </div>

            {{-- Kolom 2: Tautan Cepat --}}
            <div class="col-xl-2 col-lg-2 col-md-6 mb-3">
                <h5 class="fw-bold mb-2 text-yellow">Tautan Cepat</h5>
                <ul class="list-unstyled footer-links mb-0">
                    <li class="mb-1"><a href="/" class="text-white-75 text-decoration-none footer-link small d-block py-1">Beranda</a></li>
                    <li class="mb-1"><a href="/about" class="text-white-75 text-decoration-none footer-link small d-block py-1">Tentang</a></li>
                    <li class="mb-1"><a href="/infrastructure" class="text-white-75 text-decoration-none footer-link small d-block py-1">Infrastruktur</a></li>
                    <li class="mb-1"><a href="/contact" class="text-white-75 text-decoration-none footer-link small d-block py-1">Kontak</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Kontak --}}
            <div class="col-xl-4 col-lg-5 col-md-12 mb-3">
                <h5 class="fw-bold mb-2 text-yellow">Kontak</h5>
                <div class="d-flex flex-column gap-2">
                    {{-- Alamat --}}
                    <div class="d-flex align-items-start">
                        <i class="fas fa-map-marker-alt text-yellow me-2 flex-shrink-0 mt-1" style="font-size: 0.9rem;"></i>
                        <span class="text-white-75 small">Nogotirto, Gamping, Sleman, DIY</span>
                    </div>
                    {{-- Telepon --}}
                    <div class="d-flex align-items-center">
                        <i class="fas fa-phone text-yellow me-2 flex-shrink-0" style="font-size: 0.9rem;"></i>
                        <span class="text-white-75 small">+6281344535062</span>
                    </div>
                    {{-- Email --}}
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope text-yellow me-2 flex-shrink-0" style="font-size: 0.9rem;"></i>
                        <span class="text-white-75 small">perengmina@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-3 border-white-10">

        <div class="row align-items-center py-2">
            <div class="col-md-6">
                <p class="mb-0 text-white-75 small">&copy; 2025 Pereng Mina GAP. All rights reserved.</p>
            </div>
        </div>
    </div>

    <style>
        :root {
            --yellow-color: #ffc107;
        }

        .dark-blue-gradient-bg {
            background: linear-gradient(135deg, #0d365e 0%, #001f3f 100%);
        }

        .text-yellow {
            color: var(--yellow-color) !important;
        }
        .text-white-75 {
            color: rgba(255, 255, 255, 0.75) !important;
        }
        .border-white-10 {
            border-color: rgba(255, 255, 255, 0.1) !important;
        }

        .pattern-dots {
            background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 0);
            background-size: 15px 15px;
            z-index: 1;
        }
        .container.position-relative {
            z-index: 2;
        }

        .footer-triangle-shape {
            width: 0;
            height: 0;
            border-top: 60px solid transparent;
            border-left: 60px solid #0d365e;
            filter: brightness(1.2);
            opacity: 0.5;
            position: absolute;
            bottom: 0;
            left: 0;
            transform: translateY(100%);
            z-index: 1;
        }

        .social-icon-circle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            font-size: 0.85rem;
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: var(--yellow-color) !important;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-icon-circle:hover {
            background-color: var(--yellow-color);
            color: #001f3f !important;
            border-color: var(--yellow-color);
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(255, 193, 7, 0.3);
        }

        .footer-link {
            transition: all 0.2s ease;
            position: relative;
        }

        .footer-link:hover {
            color: var(--yellow-color) !important;
            transform: translateX(3px);
        }

        .footer-links li {
            border-left: 1px solid transparent;
            transition: all 0.2s ease;
            padding-left: 6px;
        }

        .footer-links li:hover {
            border-left-color: var(--yellow-color);
            padding-left: 8px;
        }

        .footer-links li a {
            line-height: 1.4;
        }

        h5.fw-bold {
            font-size: 1rem;
            margin-bottom: 0.75rem !important;
        }

        .text-white-75.small {
            line-height: 1.5;
            font-size: 0.85rem;
        }

        @media (max-width: 768px) {
            .social-links {
                justify-content: flex-start;
            }

            .footer-links li {
                padding-left: 0;
                border-left: none;
            }

            .footer-links li:hover {
                padding-left: 0;
                border-left: none;
            }

            .col-md-6.text-md-end {
                text-align: left !important;
                margin-top: 0.5rem;
            }

            .mb-3 {
                margin-bottom: 1.5rem !important;
            }

            .row.g-3.py-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1rem !important;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .social-icon-circle {
                width: 30px;
                height: 30px;
                font-size: 0.8rem;
            }

            .row.g-3.py-4 {
                padding-top: 1rem !important;
                padding-bottom: 0.5rem !important;
            }

            .mb-3 {
                margin-bottom: 1rem !important;
            }
        }

        .d-flex.flex-column.gap-2 {
            gap: 0.75rem !important;
        }

        footer {
            padding-top: 2rem !important;
            padding-bottom: 1rem !important;
        }
    </style>
</footer>
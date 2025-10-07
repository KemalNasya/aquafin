@extends('layouts.app')

@section('title', 'Infrastructure - Company Name')

@section('content')
    <section class="hero-section position-relative overflow-hidden"
        style="min-height: 89vh; background: url('{{ asset('assets/mesinnn.jpg') }}') center/cover no-repeat; display: flex; align-items: center;">
        <div class="position-absolute top-0 start-0 w-100 h-100 dark-blue-gradient-overlay"></div>
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0s"
                        style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7);">Infrastruktur dan Teknologi</h1>
                    <p class="lead fs-4 mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0.3s"
                        style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Fasilitas modern
                        dan teknologi canggih untuk budidaya ikan berkelanjutan dan berkualitas tinggi</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 dark-blue-gradient-bg text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0s">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 counter" data-target="500">0</div>
                        <p class="mb-0 fs-5">Ton Ikan/tahun</p>
                        <small class="text-white-50">Kapasitas Produksi</small>
                    </div>
                </div>
                <div class="col-md-3 mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0.2s">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 counter" data-target="50">0</div>
                        <p class="mb-0 fs-5">Hektar</p>
                        <small class="text-white-50">Luas Lahan</small>
                    </div>
                </div>
                <div class="col-md-3 mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0.4s">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 counter" data-target="90">0</div>
                        <p class="mb-0 fs-5">%</p>
                        <small class="text-white-50">Efisiensi Air</small>
                    </div>
                </div>
                <div class="col-md-3 mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0.6s">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 counter" data-target="100">0</div>
                        <p class="mb-0 fs-5">Kolam</p>
                        <small class="text-white-50">Total Kolam</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="overview" class="section-padding py-5 custom-gradient-bg text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animate-on-scroll" data-animation="slideInLeft" data-delay="0s">
                    <div class="position-relative">
                        <img src="{{ asset('assets/template.jpg') }}" alt="Infrastruktur Budidaya"
                            class="img-fluid rounded shadow-lg hover-scale">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="bg-white bg-opacity-90 rounded-circle p-4 shadow-lg pulse-animation">
                                <i class="fas fa-play custom-text-primary fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 animate-on-scroll" data-animation="fadeInUp" data-delay="0.2s">
                    <h2 class="fw-bold mb-4 text-white">Gambaran Umum Infrastruktur</h2>
                    <p class="lead mb-4">Infrastruktur budidaya ikan kami dirancang dengan pendekatan
                        berkelanjutan, mengintegrasikan teknologi modern untuk memastikan produksi ikan berkualitas tinggi
                        sambil menjaga keseimbangan lingkungan.</p>
                    <p>Dengan luas lahan lebih dari 5 hektar, fasilitas kami mencakup kolam budidaya,
                        laboratorium pengujian, dan sistem monitoring otomatis. Setiap elemen dirancang untuk mendukung
                        siklus budidaya yang efisien dari bibit hingga panen.</p>
                    <div class="row mt-4">
                        <div class="col-4 text-center animate-on-scroll" data-animation="fadeInUp" data-delay="0.4s">
                            <div class="feature-highlight p-3 rounded bg-white shadow-sm hover-lift">
                                <i class="fas fa-award text-warning fs-2 mb-2"></i>
                                <small class="text-muted d-block">ISO 14001</small>
                            </div>
                        </div>
                        <div class="col-4 text-center animate-on-scroll" data-animation="fadeInUp" data-delay="0.6s">
                            <div class="feature-highlight p-3 rounded bg-white shadow-sm hover-lift">
                                <i class="fas fa-leaf text-success fs-2 mb-2"></i>
                                <small class="text-muted d-block">Ramah Lingkungan</small>
                            </div>
                        </div>
                        <div class="col-4 text-center animate-on-scroll" data-animation="fadeInUp" data-delay="0.8s">
                            <div class="feature-highlight p-3 rounded bg-white shadow-sm hover-lift">
                                <i class="fas fa-cogs custom-text-primary fs-2 mb-2"></i>
                                <small class="text-muted d-block">Teknologi Canggih</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="section-padding py-5 custom-gradient-bg text-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3 text-white animate-on-scroll" data-animation="fadeInUp" data-delay="0s">Proses Budidaya Modern</h2>
                <p class="lead animate-on-scroll" data-animation="fadeInUp" data-delay="0.2s">Siklus lengkap dari bibit hingga panen
                    dengan teknologi terkini</p>
            </div>
            <div class="timeline dark-blue-timeline">
                <div class="timeline-item animate-on-scroll" data-animation="fadeInUp" data-delay="0.4s">
                    <div class="timeline-marker dark-blue-bg"></div>
                    <div class="timeline-content">
                        <div class="card border-0 shadow-sm card-hover">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="timeline-icon dark-blue-bg text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 50px; height: 50px;">
                                        <i class="fas fa-egg"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 custom-text-primary">Pembibitan</h5>
                                        <small class="text-muted">Tahap 1 - 2 Minggu</small>
                                    </div>
                                </div>
                                <p class="card-text text-muted">Proses pembenihan ikan secara terkontrol dengan teknologi
                                    inkubasi modern untuk memastikan kualitas bibit yang tinggi dan tingkat kelangsungan
                                    hidup optimal.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item animate-on-scroll" data-animation="fadeInUp" data-delay="0.6s">
                    <div class="timeline-marker bg-success"></div>
                    <div class="timeline-content">
                        <div class="card border-0 shadow-sm card-hover">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="timeline-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 50px; height: 50px;">
                                        <i class="fas fa-fish"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 text-success">Pendederan</h5>
                                        <small class="text-muted">Tahap 2 - 4 Minggu</small>
                                    </div>
                                </div>
                                <p class="card-text text-muted">Tahap adaptasi bibit ikan ke lingkungan kolam dengan sistem
                                    monitoring intensif untuk memastikan pertumbuhan yang sehat dan seragam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item animate-on-scroll" data-animation="fadeInUp" data-delay="0.8s">
                    <div class="timeline-marker bg-warning"></div>
                    <div class="timeline-content">
                        <div class="card border-0 shadow-sm card-hover">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="timeline-icon bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 50px; height: 50px;">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 text-warning">Budidaya Intensif</h5>
                                        <small class="text-muted">Tahap 3 - 6 Bulan</small>
                                    </div>
                                </div>
                                <p class="card-text text-muted">Fase pertumbuhan utama dengan sistem pemberian pakan
                                    otomatis dan monitoring 24/7 untuk mencapai ukuran panen optimal dengan efisiensi
                                    maksimal.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-item animate-on-scroll" data-animation="fadeInUp" data-delay="1.0s">
                    <div class="timeline-marker bg-info"></div>
                    <div class="timeline-content">
                        <div class="card border-0 shadow-sm card-hover">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="timeline-icon bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 50px; height: 50px;">
                                        <i class="fas fa-box-open"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 text-info">Panen & Distribusi</h5>
                                        <small class="text-muted">Tahap Akhir</small>
                                    </div>
                                </div>
                                <p class="card-text text-muted">Panen selektif dengan teknologi grading otomatis dan sistem
                                    distribusi langsung ke pasar untuk memastikan kesegaran produk hingga ke konsumen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="facilities" class="section-padding py-5 custom-gradient-bg text-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3 text-white animate-on-scroll" data-animation="fadeInUp" data-delay="0s">Fasilitas Utama</h2>
                <p class="lead animate-on-scroll" data-animation="fadeInUp" data-delay="0.2s">Komponen infrastruktur yang
                    mendukung operasional budidaya ikan berkelanjutan</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 animate-on-scroll" data-animation="fadeInUp" data-delay="0.4s">
                    <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-light-transparant-white h-100">
                        <div class="facility-icon mb-3">
                            <i class="fas fa-water custom-text-primary fs-1"></i>
                        </div>
                        <h5 class="custom-text-primary mb-3">Kolam Budidaya</h5>
                        <p class="small">Memiliki 26 Kolam dengan luas yang bervariasi.</p>
                        <div class="mt-3">
                            <span class="badge dark-blue-bg">100 Kolam</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-on-scroll" data-animation="fadeInUp" data-delay="0.6s">
                    <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-light-transparant-white h-100">
                        <div class="facility-icon mb-3">
                            {{-- Perubahan ikon Mesin Pengolah Pakan --}}
                            <i class="fas fa-mortar-pestle text-success fs-1"></i>
                        </div>
                        <h5 class="text-success mb-3">Mesin Pengolah Pakan</h5>
                        <p class="small">Mesin pelet pakan ikan berfungsi membuat pelet tenggelam berbentuk silinder pendek (3–5 cm).
                            Bahan pakan seperti protein, karbohidrat, vitamin, mineral, minyak nabati, dan pengikat dicampur rata dalam mixer sebelum diproses.
                            Pakan tambahan dapat dibuat dari residu warung atau toko roti yang telah dicacah halus terlebih dahulu.</p>
                        <div class="mt-3">
                            <span class="badge bg-success">Otomatis</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-on-scroll" data-animation="fadeInUp" data-delay="0.8s">
                    <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-light-transparant-white h-100">
                        <div class="facility-icon mb-3">
                            {{-- Perubahan ikon Instalasi PLTS --}}
                            <i class="fas fa-solar-panel text-warning fs-1"></i>
                        </div>
                        <h5 class="text-warning mb-3">Instalasi PLTS</h5>
                        <p class="small">Instalasi PLTS yang dipasang di salah satu gazebo di Kelompok Pembudidaya Ikan
                            "Pereng Mina" GAP merupakan sumber catu daya bantuan yang digunakan untuk penerangan dan operasi pompa yang tersedia.
                            Penerangan berupa lampu digunakan untuk penerangan lokasi kolam saat di malam hari..
                        </p>
                        <div class="mt-3">
                            <span class="badge bg-warning">Energi Terbarukan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 animate-on-scroll" data-animation="fadeInUp" data-delay="1.0s">
                    <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-light-transparant-white h-100">
                        <div class="facility-icon mb-3">
                            <i class="fas fa-leaf text-info fs-1"></i>
                        </div>
                        <h5 class="text-info mb-3">Pengelolaan Air</h5>
                        <p class="small">Sistem daur ulang air 90% efisien untuk budidaya berkelanjutan.</p>
                        <div class="mt-3">
                            <span class="badge bg-info">90% Efisien</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <style>
        /* Mendefinisikan warna kustom dari gambar */
        :root {
            --dark-blue-color: #002244;
            /* Warna gelap pada gambar */
            --light-blue-color: #1a4c8a;
            /* Warna terang pada gambar */
            --primary-color: #003366;
            /* Warna primer baru yang lebih solid */
            --gradient-start: #002244;
            --gradient-end: #1a4c8a;
            /* WARNA GRADIENT BARU UNTUK BACKGROUND PUTIH */
            --new-gradient-start: #0a2c4d;
            --new-gradient-end: #154e8d;
        }

        /* Mengganti primary color dengan warna baru */
        .custom-text-primary {
            color: var(--primary-color) !important;
        }

        .dark-blue-bg {
            background-color: var(--primary-color) !important;
        }

        .dark-blue-gradient-overlay {
            /* Overlay di Hero Section */
            background: linear-gradient(135deg, rgba(0, 34, 68, 0.9) 0%, rgba(26, 76, 138, 0.7) 100%);
        }

        .dark-blue-gradient-bg {
            /* Background di Statistics dan CTA Section */
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%) !important;
        }

        .btn-dark-blue-gradient {
            background: linear-gradient(45deg, var(--gradient-start), var(--gradient-end));
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-dark-blue-gradient:hover {
            background: linear-gradient(45deg, var(--light-blue-color), var(--dark-blue-color));
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 34, 68, 0.5);
        }

        /* MENGGANTI CLASS custom-light-bg DENGAN BACKGROUND GRADIENT BARU */
        .custom-gradient-bg {
            background: linear-gradient(90deg, var(--new-gradient-start) 0%, var(--new-gradient-end) 100%) !important;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        /* CARD TRANSPARANT (Pengganti bg-white di Fasilitas & Teknologi) */
        .bg-light-transparant-white {
            background-color: rgba(255, 255, 255, 0.9) !important;
            color: #333; /* Pastikan teks di dalam card tetap gelap */
        }
        .bg-light-transparant-white p {
            color: #6c757d !important; /* Muted text di dalam card */
        }

        /* Teks di Section Utama custom-gradient-bg (Judul sudah text-white, Lead & P lainnya) */
        #overview.custom-gradient-bg p,
        #overview.custom-gradient-bg .lead,
        #process.custom-gradient-bg p,
        #process.custom-gradient-bg .lead,
        #facilities.custom-gradient-bg p,
        #facilities.custom-gradient-bg .lead,
        #technology.custom-gradient-bg p,
        #technology.custom-gradient-bg .lead {
            color: rgba(255, 255, 255, 0.8) !important;
        }

        /* Override warna teks card di timeline agar tetap terbaca */
        #process.custom-gradient-bg .card .text-muted {
            color: #6c757d !important; /* Kembalikan ke muted color agar kontras dengan card putih */
        }
        /* Override warna teks card fasilitas/teknologi agar tidak terlalu putih */
        #facilities.custom-gradient-bg .facility-card p,
        #technology.custom-gradient-bg .tech-card p {
            color: #6c757d !important;
        }

        /* Timeline Marker dan Line Adjustments */
        .dark-blue-timeline::before {
            /* Garis timeline utama */
            background: linear-gradient(to bottom, var(--primary-color), #28a745, #ffc107, #17a2b8);
        }

        /* Existing Animations */
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

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        /* Hover Effects */
        .hover-scale:hover {
            transform: scale(1.03); /* Sedikit dikurangi agar tidak terlalu besar */
            transition: transform 0.4s ease;
        }

        .hover-lift:hover {
            transform: translateY(-8px); /* Efek lift lebih jelas */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
            transition: all 0.4s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
            transition: all 0.3s ease;
        }

        /* New: Hide elements initially for scroll animation */
        .animate-on-scroll {
            opacity: 0;
            /* Pastikan elemen tersembunyi pada awalnya */
        }

        /* Media Query for smaller screens */
        @media (max-width: 768px) {
            .section-padding {
                padding: 3rem 0;
            }

            .hero-section {
                min-height: 50vh;
            }

            .timeline {
                padding-left: 20px;
            }

            .timeline-marker {
                left: -17px;
                width: 10px;
                height: 10px;
            }

            .timeline-content {
                margin-left: 20px;
            }
        }
    </style>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // --- 1. Counter Animation (TIDAK ADA PERUBAHAN) ---
                function animateCounter(counter) {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;

                    const timer = setInterval(() => {
                        current += step;
                        if (current >= target) {
                            counter.textContent = target.toLocaleString();
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(current).toLocaleString();
                        }
                    }, 16);
                }

                // --- 2. Scroll Animation Setup (TIDAK ADA PERUBAHAN) ---
                const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');

                const animationObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const element = entry.target;
                            const animation = element.getAttribute('data-animation');
                            const delay = element.getAttribute('data-delay');

                            // Menerapkan animasi
                            element.style.animation = `${animation} 1s ease-out ${delay} forwards`;

                            // Menjalankan Counter Animation jika elemennya adalah Statistics Section
                            if (element.closest('.dark-blue-gradient-bg') && element.querySelector('.counter')) {
                                element.querySelectorAll('.counter').forEach(animateCounter);
                            }

                            // Hentikan pengamatan setelah animasi diaktifkan
                            observer.unobserve(element);
                        }
                    });
                }, {
                    threshold: 0.1, // Mulai animasi saat 10% elemen terlihat
                    rootMargin: '0px 0px -50px 0px'
                });

                // Terapkan observer ke semua elemen yang perlu dianimasikan saat scroll
                elementsToAnimate.forEach(element => {
                    // Atur properti style untuk animasi (opacity 0 sudah diatur di CSS)
                    element.style.animationFillMode = 'both';
                    element.style.opacity = '0'; // Pastikan tersembunyi
                    animationObserver.observe(element);
                });

            });
        </script>
    @endpush
@endsection
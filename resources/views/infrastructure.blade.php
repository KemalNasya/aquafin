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
            
            {{-- Statistik 1: Luas Area (0.6 Ha) --}}
            <div class="col-md-3 mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0s">
                <div class="stat-item">
                    {{-- Target diubah dari 50 menjadi 0.6. Perlu sedikit penyesuaian di JS untuk angka desimal --}}
                    <div class="display-4 fw-bold mb-2 counter" data-target="6">0</div>
                    <p class="mb-0 fs-5">0.6 Hektar</p>
                    <small class="text-white-50">Luas Area Kelolaan</small>
                </div>
            </div>

            {{-- Statistik 2: Jumlah Kolam (26 Buah) --}}
            <div class="col-md-3 mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0.2s">
                <div class="stat-item">
                    <div class="display-4 fw-bold mb-2 counter" data-target="26">0</div>
                    <p class="mb-0 fs-5">Kolam</p>
                    <small class="text-white-50">Total Kolam Budidaya</small>
                </div>
            </div>

            {{-- Statistik 3: Jumlah Anggota (29 Orang) --}}
            <div class="col-md-3 mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0.4s">
                <div class="stat-item">
                    <div class="display-4 fw-bold mb-2 counter" data-target="29">0</div>
                    <p class="mb-0 fs-5">Anggota</p>
                    <small class="text-white-50">PIC Kolam & Pengelola</small>
                </div>
            </div>

            {{-- Statistik 4: Kapasitas PLTS (1500 WP) - Fitur Infrastruktur Kunci --}}
            <div class="col-md-3 mb-4 animate-on-scroll" data-animation="fadeInUp" data-delay="0.6s">
                <div class="stat-item">
                    <div class="display-4 fw-bold mb-2 counter" data-target="1500">0</div>
                    <p class="mb-0 fs-5">Watt Peak (WP)</p>
                    <small class="text-white-50">Kapasitas PLTS Hybrid</small>
                </div>
            </div>
            
        </div>
    </div>
</section>
            <!-- ==================== GAMBARAN UMUM INFRASTRUKTUR ==================== -->
<section id="infrastructure" class="section-padding py-5 text-white" style="background: linear-gradient(135deg, #002b60, #014a8a);">
    <div class="container">
        <div class="row align-items-center">

            <!-- Kolom Gambar -->
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="position-relative rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/kolam.jpg') }}" 
                         alt="Infrastruktur Pereng Mina" 
                         class="img-fluid rounded" 
                         style="object-fit: cover; width: 100%; height: 380px;">
                    <!-- Tombol Play di Tengah -->
                    <div class="position-absolute top-50 start-50 translate-middle">
                         <a href="{{ asset('assets/Kolamvidd.mp4') }}" target="_blank">
                    
                            <i class="fas fa-play text-primary"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kolom Teks -->
            <div class="col-lg-6 col-md-12">
                <div class="p-3" style="color: white; z-index: 10; position: relative;">
                    <h2 class="fw-bold mb-4" style="color: #ffffff;">Gambaran Umum Infrastruktur</h2>
                    <p class="lead mb-4" style="color: #f5f5f5;">
                        Infrastruktur kelompok pembudidaya ikan “Pereng Mina” GAP dirancang untuk mendukung kegiatan
                        budidaya ikan air tawar secara berkelanjutan. Setiap elemen fasilitas memanfaatkan sumber daya lokal
                        seperti mata air alami dan energi surya untuk menjaga efisiensi dan keberlanjutan lingkungan.
                    </p>
                    <p style="color: #f5f5f5;">
                        Dengan luas area ±0,6 hektar dan 26 kolam budidaya, kelompok ini memanfaatkan sistem pengairan dari
                        mata air sekitar, mesin pembuat pakan (TTG Pelet), serta instalasi PLTS hybrid 1500 WP yang digunakan
                        untuk pompa dan penerangan kolam. Website resmi kelompok juga dikembangkan untuk mendukung digitalisasi 
                        manajemen usaha melalui pencatatan keuangan dan publikasi kegiatan.
                    </p>

                    
                    
        </div> <!-- /row -->
    </div> <!-- /container -->
</section>


                <div class="row mt-4">
                    <div class="col-4 text-center animate-on-scroll" data-animation="fadeInUp" data-delay="0.4s">
                        <div class="feature-highlight p-3 rounded bg-white shadow-sm hover-lift">
                            <i class="fas fa-solar-panel text-warning fs-2 mb-2"></i>
                            <small class="text-muted d-block">PLTS Hybrid 1500 WP</small>
                        </div>
                    </div>
                    <div class="col-4 text-center animate-on-scroll" data-animation="fadeInUp" data-delay="0.6s">
                        <div class="feature-highlight p-3 rounded bg-white shadow-sm hover-lift">
                            <i class="fas fa-fish text-success fs-2 mb-2"></i>
                            <small class="text-muted d-block">26 Kolam Ikan</small>
                        </div>
                    </div>
                    <div class="col-4 text-center animate-on-scroll" data-animation="fadeInUp" data-delay="0.8s">
                        <div class="feature-highlight p-3 rounded bg-white shadow-sm hover-lift">
                            <i class="fas fa-mortar-pestle custom-text-primary fs-2 mb-2"></i>
                            <small class="text-muted d-block">Mesin Pelet Pakan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PROSES BUDIDAYA ==================== -->
<section id="process" class="section-padding py-5 custom-gradient-bg text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3 text-white animate-on-scroll" data-animation="fadeInUp" data-delay="0s">
                Proses Budidaya Ikan di “Pereng Mina”
            </h2>
            <p class="lead animate-on-scroll" data-animation="fadeInUp" data-delay="0.2s">
                Tahapan budidaya ikan nila, lele, dan gurami dari bibit hingga panen dengan penerapan teknologi tepat guna.
            </p>
        </div>
        <div class="timeline dark-blue-timeline">
            <!-- Tahap 1 -->
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
                                    <h5 class="card-title mb-1 custom-text-primary">Pembenihan & Penebaran</h5>
                                    <small class="text-muted">Tahap Awal</small>
                                </div>
                            </div>
                            <p class="card-text text-muted">
                                Pemilihan dan penebaran bibit ikan nila, lele, dan gurami ke kolam tanah yang bersumber dari mata air alami.
                                Penebaran dilakukan berdasarkan hasil musyawarah antar anggota untuk menjamin distribusi yang merata.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tahap 2 -->
            <div class="timeline-item animate-on-scroll" data-animation="fadeInUp" data-delay="0.6s">
                <div class="timeline-marker bg-success"></div>
                <div class="timeline-content">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="timeline-icon bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="fas fa-seedling"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1 text-success">Pemeliharaan</h5>
                                    <small class="text-muted">Tahap 1 - 6 Bulan</small>
                                </div>
                            </div>
                            <p class="card-text text-muted">
                                Pemeliharaan dilakukan secara rutin dengan pemberian pakan tiga kali sehari,
                                menggunakan pakan hasil produksi mesin pelet buatan sendiri. Kualitas air kolam
                                dijaga melalui aerasi dan pompa yang ditenagai energi PLTS hybrid.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tahap 3 -->
            <div class="timeline-item animate-on-scroll" data-animation="fadeInUp" data-delay="0.8s">
                <div class="timeline-marker bg-warning"></div>
                <div class="timeline-content">
                    <div class="card border-0 shadow-sm card-hover">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="timeline-icon bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 50px; height: 50px;">
                                    <i class="fas fa-box-open"></i>
                                </div>
                                <div>
                                    <h5 class="card-title mb-1 text-warning">Panen</h5>
                                    <small class="text-muted">Tahap Akhir</small>
                                </div>
                            </div>
                            <p class="card-text text-muted">
                                Panen dilakukan secara selektif sesuai ukuran dan jenis ikan. 
                                Lele dipanen setiap 2–3 bulan, nila sekitar 6 bulan, dan gurami hingga 1 tahun.
                                Hasil panen kemudian dijual ke pasar lokal dalam bentuk ikan segar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FASILITAS UTAMA ==================== -->
<section id="facilities" class="section-padding py-5 custom-gradient-bg text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3 text-white animate-on-scroll" data-animation="fadeInUp" data-delay="0s">Fasilitas Utama</h2>
            <p class="lead animate-on-scroll" data-animation="fadeInUp" data-delay="0.2s">
                Sarana penunjang utama kegiatan Kelompok Pembudidaya Ikan “Pereng Mina” GAP
            </p>
        </div>
        <div class="row g-4">
            <!-- Kolam Budidaya -->
            <div class="col-lg-3 col-md-6 animate-on-scroll" data-animation="fadeInUp" data-delay="0.4s">
                <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-light-transparant-white h-100">
                    <div class="facility-icon mb-3">
                        <i class="fas fa-water custom-text-primary fs-1"></i>
                    </div>
                    <h5 class="custom-text-primary mb-3">Kolam Budidaya</h5>
                    <p class="small">
                        Sebanyak 26 kolam tanah dengan sistem pengairan dari mata air alami di area seluas ±0,6 hektar.
                        Setiap kolam dikelola oleh anggota dengan sistem tanggung jawab individu (PIC).
                    </p>
                    <div class="mt-3">
                        <span class="badge dark-blue-bg">26 Kolam</span>
                    </div>
                </div>
            </div>

            <!-- Mesin Pelet -->
            <div class="col-lg-3 col-md-6 animate-on-scroll" data-animation="fadeInUp" data-delay="0.6s">
                <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-light-transparant-white h-100">
                    <div class="facility-icon mb-3">
                        <i class="fas fa-mortar-pestle text-success fs-1"></i>
                    </div>
                    <h5 class="text-success mb-3">Mesin Pelet Pakan Ikan</h5>
                    <p class="small">
                        Teknologi Tepat Guna (TTG) yang digunakan untuk memproduksi pakan ikan berbentuk pelet
                        dari bahan lokal seperti dedak, tepung ikan, dan bungkil kedelai untuk mengurangi biaya produksi.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-success">TTG Lokal</span>
                    </div>
                </div>
            </div>

            <!-- PLTS -->
            <div class="col-lg-3 col-md-6 animate-on-scroll" data-animation="fadeInUp" data-delay="0.8s">
                <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-light-transparant-white h-100">
                    <div class="facility-icon mb-3">
                        <i class="fas fa-solar-panel text-warning fs-1"></i>
                    </div>
                    <h5 class="text-warning mb-3">Instalasi PLTS Hybrid</h5>
                    <p class="small">
                        Pembangkit Listrik Tenaga Surya 1500 WP yang digunakan untuk penerangan dan pompa air di area kolam.
                        Mendukung efisiensi energi dan keberlanjutan lingkungan kelompok budidaya.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-warning">Energi Terbarukan</span>
                    </div>
                </div>
            </div>

            <!-- Website Pereng Mina -->
            <div class="col-lg-3 col-md-6 animate-on-scroll" data-animation="fadeInUp" data-delay="1.0s">
                <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-light-transparant-white h-100">
                    <div class="facility-icon mb-3">
                        <i class="fas fa-globe text-info fs-1"></i>
                    </div>
                    <h5 class="text-info mb-3">Website Pereng Mina</h5>
                    <p class="small">
                        Website resmi kelompok berfungsi sebagai media informasi, promosi, dan dokumentasi kegiatan budidaya ikan.
                        Selain itu, website juga dilengkapi fitur pencatatan keuangan keluar-masuk yang hanya dapat diakses oleh 
                        admin “Pereng Mina” untuk menjaga keamanan dan transparansi data internal.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-info">Informasi & Keuangan</span>
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
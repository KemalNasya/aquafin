@extends('layouts.app')

@section('title', 'Infrastructure - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden"
        style="min-height: 60vh; background: url('{{ asset('assets/template.jpg') }}') center/cover no-repeat; display: flex; align-items: center;">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4"
                        style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7); animation: fadeInUp 1s ease-out;">Infrastruktur
                        Budidaya</h1>
                    <p class="lead fs-4 mb-4"
                        style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 1.5s ease-out;">Fasilitas modern
                        dan teknologi canggih untuk budidaya ikan berkelanjutan dan berkualitas tinggi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 bg-gradient-primary text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4" style="animation: fadeInUp 1s ease-out;">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 counter" data-target="500">0</div>
                        <p class="mb-0 fs-5">Ton Ikan/tahun</p>
                        <small class="text-white-50">Kapasitas Produksi</small>
                    </div>
                </div>
                <div class="col-md-3 mb-4" style="animation: fadeInUp 1.2s ease-out;">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 counter" data-target="50">0</div>
                        <p class="mb-0 fs-5">Hektar</p>
                        <small class="text-white-50">Luas Lahan</small>
                    </div>
                </div>
                <div class="col-md-3 mb-4" style="animation: fadeInUp 1.4s ease-out;">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 counter" data-target="90">0</div>
                        <p class="mb-0 fs-5">%</p>
                        <small class="text-white-50">Efisiensi Air</small>
                    </div>
                </div>
                <div class="col-md-3 mb-4" style="animation: fadeInUp 1.6s ease-out;">
                    <div class="stat-item">
                        <div class="display-4 fw-bold mb-2 counter" data-target="100">0</div>
                        <p class="mb-0 fs-5">Kolam</p>
                        <small class="text-white-50">Total Kolam</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section id="overview" class="section-padding py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" style="animation: slideInLeft 1s ease-out;">
                    <div class="position-relative">
                        <img src="{{ asset('assets/template.jpg') }}" alt="Infrastruktur Budidaya"
                            class="img-fluid rounded shadow-lg hover-scale">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="bg-white bg-opacity-90 rounded-circle p-4 shadow-lg pulse-animation">
                                <i class="fas fa-play text-primary fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="animation: fadeInUp 1.2s ease-out;">
                    <h2 class="fw-bold mb-4 text-primary">Gambaran Umum Infrastruktur</h2>
                    <p class="lead text-muted mb-4">Infrastruktur budidaya ikan kami dirancang dengan pendekatan
                        berkelanjutan, mengintegrasikan teknologi modern untuk memastikan produksi ikan berkualitas tinggi
                        sambil menjaga keseimbangan lingkungan.</p>
                    <p class="text-muted">Dengan luas lahan lebih dari 5 hektar, fasilitas kami mencakup kolam budidaya,
                        laboratorium pengujian, dan sistem monitoring otomatis. Setiap elemen dirancang untuk mendukung
                        siklus budidaya yang efisien dari bibit hingga panen.</p>
                    <div class="row mt-4">
                        <div class="col-4 text-center">
                            <div class="feature-highlight p-3 rounded bg-white shadow-sm">
                                <i class="fas fa-award text-warning fs-2 mb-2"></i>
                                <small class="text-muted d-block">ISO 14001</small>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="feature-highlight p-3 rounded bg-white shadow-sm">
                                <i class="fas fa-leaf text-success fs-2 mb-2"></i>
                                <small class="text-muted d-block">Ramah Lingkungan</small>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="feature-highlight p-3 rounded bg-white shadow-sm">
                                <i class="fas fa-cogs text-primary fs-2 mb-2"></i>
                                <small class="text-muted d-block">Teknologi Canggih</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Timeline Section -->
    <section id="process" class="section-padding py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3 text-primary" style="animation: fadeInUp 1s ease-out;">Proses Budidaya Modern</h2>
                <p class="lead text-muted" style="animation: fadeInUp 1.2s ease-out;">Siklus lengkap dari bibit hingga panen
                    dengan teknologi terkini</p>
            </div>
            <div class="timeline">
                <div class="timeline-item" style="animation: fadeInUp 1.4s ease-out;">
                    <div class="timeline-marker bg-primary"></div>
                    <div class="timeline-content">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="timeline-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                                        style="width: 50px; height: 50px;">
                                        <i class="fas fa-egg"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 text-primary">Pembibitan</h5>
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
                <div class="timeline-item" style="animation: fadeInUp 1.6s ease-out;">
                    <div class="timeline-marker bg-success"></div>
                    <div class="timeline-content">
                        <div class="card border-0 shadow-sm">
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
                <div class="timeline-item" style="animation: fadeInUp 1.8s ease-out;">
                    <div class="timeline-marker bg-warning"></div>
                    <div class="timeline-content">
                        <div class="card border-0 shadow-sm">
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
                <div class="timeline-item" style="animation: fadeInUp 2s ease-out;">
                    <div class="timeline-marker bg-info"></div>
                    <div class="timeline-content">
                        <div class="card border-0 shadow-sm">
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

    <!-- Facilities Section -->
    <section id="facilities" class="section-padding py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3 text-primary" style="animation: fadeInUp 1s ease-out;">Fasilitas Utama</h2>
                <p class="lead text-muted" style="animation: fadeInUp 1.2s ease-out;">Komponen infrastruktur yang
                    mendukung operasional budidaya ikan berkelanjutan</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" style="animation: fadeInUp 1.4s ease-out;">
                    <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-white h-100">
                        <div class="facility-icon mb-3">
                            <i class="fas fa-water text-primary fs-1"></i>
                        </div>
                        <h5 class="text-primary mb-3">Kolam Budidaya</h5>
                        <p class="text-muted small">Kolam beton modern dengan sistem aerasi canggih untuk sirkulasi air
                            optimal.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary">100 Kolam</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="animation: fadeInUp 1.6s ease-out;">
                    <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-white h-100">
                        <div class="facility-icon mb-3">
                            <i class="fas fa-flask text-success fs-1"></i>
                        </div>
                        <h5 class="text-success mb-3">Laboratorium</h5>
                        <p class="text-muted small">Fasilitas pengujian lengkap untuk analisis kualitas air dan nutrisi
                            pakan.</p>
                        <div class="mt-3">
                            <span class="badge bg-success">Real-time</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="animation: fadeInUp 1.8s ease-out;">
                    <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-white h-100">
                        <div class="facility-icon mb-3">
                            <i class="fas fa-cogs text-warning fs-1"></i>
                        </div>
                        <h5 class="text-warning mb-3">Sistem IoT</h5>
                        <p class="text-muted small">Monitoring otomatis 24/7 dengan sensor canggih untuk kontrol kualitas.
                        </p>
                        <div class="mt-3">
                            <span class="badge bg-warning">24/7</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="animation: fadeInUp 2s ease-out;">
                    <div class="facility-card text-center p-4 rounded-3 shadow-sm hover-lift bg-white h-100">
                        <div class="facility-icon mb-3">
                            <i class="fas fa-leaf text-info fs-1"></i>
                        </div>
                        <h5 class="text-info mb-3">Pengelolaan Air</h5>
                        <p class="text-muted small">Sistem daur ulang air 90% efisien untuk budidaya berkelanjutan.</p>
                        <div class="mt-3">
                            <span class="badge bg-info">90% Efisien</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section id="technology" class="section-padding py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3 text-primary" style="animation: fadeInUp 1s ease-out;">Teknologi Canggih</h2>
                <p class="lead text-muted" style="animation: fadeInUp 1.2s ease-out;">Integrasi teknologi modern untuk
                    efisiensi maksimal</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" style="animation: fadeInUp 1.4s ease-out;">
                    <div class="tech-card text-center p-4 bg-white rounded-3 shadow-lg hover-lift h-100">
                        <div class="tech-icon mb-4">
                            <div class="icon-circle bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-network-wired fs-2"></i>
                            </div>
                        </div>
                        <h5 class="text-primary mb-3">IoT Monitoring System</h5>
                        <p class="text-muted">Dashboard real-time dengan sensor canggih untuk monitoring suhu, pH, oksigen,
                            dan parameter kualitas air 24/7.</p>
                        <div class="tech-features mt-3">
                            <span class="badge bg-primary me-1 mb-1">Real-time</span>
                            <span class="badge bg-primary me-1 mb-1">24/7</span>
                            <span class="badge bg-primary mb-1">Predictive</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="animation: fadeInUp 1.6s ease-out;">
                    <div class="tech-card text-center p-4 bg-white rounded-3 shadow-lg hover-lift h-100">
                        <div class="tech-icon mb-4">
                            <div class="icon-circle bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-robot fs-2"></i>
                            </div>
                        </div>
                        <h5 class="text-success mb-3">Otomasi Pakan</h5>
                        <p class="text-muted">Sistem pemberian pakan otomatis terjadwal dengan kontrol presisi,
                            mengoptimalkan pertumbuhan dan efisiensi biaya.</p>
                        <div class="tech-features mt-3">
                            <span class="badge bg-success me-1 mb-1">Auto-feed</span>
                            <span class="badge bg-success me-1 mb-1">Precision</span>
                            <span class="badge bg-success mb-1">Cost-saving</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="animation: fadeInUp 1.8s ease-out;">
                    <div class="tech-card text-center p-4 bg-white rounded-3 shadow-lg hover-lift h-100">
                        <div class="tech-icon mb-4">
                            <div class="icon-circle bg-warning text-white rounded-circle d-inline-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-brain fs-2"></i>
                            </div>
                        </div>
                        <h5 class="text-warning mb-3">AI Analytics</h5>
                        <p class="text-muted">Analisis data cerdas untuk prediksi pertumbuhan, deteksi dini penyakit, dan
                            optimasi parameter budidaya.</p>
                        <div class="tech-features mt-3">
                            <span class="badge bg-warning me-1 mb-1">AI-Powered</span>
                            <span class="badge bg-warning me-1 mb-1">Predictive</span>
                            <span class="badge bg-warning mb-1">Optimization</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" style="animation: fadeInUp 2s ease-out;">
                <a href="#contact" class="btn btn-gradient btn-lg px-5 py-3 shadow-lg">
                    <i class="fas fa-rocket me-2"></i>Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3 text-primary" style="animation: fadeInUp 1s ease-out;">Testimoni Mitra</h2>
                <p class="lead text-muted" style="animation: fadeInUp 1.2s ease-out;">Apa kata para mitra dan pelanggan
                    kami</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" style="animation: fadeInUp 1.4s ease-out;">
                    <div class="testimonial-card bg-white p-4 rounded-3 shadow-lg h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/template.jpg') }}" alt="Pak Ahmad" class="rounded-circle me-3"
                                style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-primary">Pak Ahmad</h6>
                                <small class="text-muted">Peternak Ikan Nila</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="text-muted mb-0">"Dengan sistem monitoring otomatis, produktivitas naik 40% dan biaya
                            operasional turun signifikan. Teknologi ini benar-benar game changer!"</p>
                    </div>
                </div>
                <div class="col-lg-4" style="animation: fadeInUp 1.6s ease-out;">
                    <div class="testimonial-card bg-white p-4 rounded-3 shadow-lg h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/template.jpg') }}" alt="Bu Siti" class="rounded-circle me-3"
                                style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-primary">Bu Siti</h6>
                                <small class="text-muted">Manajer Restoran</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="text-muted mb-0">"Kualitas ikan sangat konsisten dan fresh. Sistem distribusi langsung
                            memastikan ikan sampai ke restoran dalam kondisi prima."</p>
                    </div>
                </div>
                <div class="col-lg-4" style="animation: fadeInUp 1.8s ease-out;">
                    <div class="testimonial-card bg-white p-4 rounded-3 shadow-lg h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/template.jpg') }}" alt="Dr. Budi" class="rounded-circle me-3"
                                style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-primary">Dr. Budi</h6>
                                <small class="text-muted">Konsultan Akuakultur</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="text-muted mb-0">"Infrastruktur yang sangat modern dan efisien. Pendekatan berkelanjutan
                            ini adalah masa depan akuakultur di Indonesia."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-gradient-primary text-white">
        <div class="container text-center" style="animation: fadeInUp 1s ease-out;">
            <h2 class="fw-bold mb-4">Siap Berkolaborasi?</h2>
            <p class="lead mb-4">Bergabunglah dengan kami dalam membangun industri budidaya ikan yang modern dan
                berkelanjutan</p>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <a href="/contact" class="btn btn-light btn-lg w-100 mb-3">
                                <i class="fas fa-phone me-2"></i>Hubungi Kami
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#facilities" class="btn btn-outline-light btn-lg w-100 mb-3">
                                <i class="fas fa-eye me-2"></i>Lihat Fasilitas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS for animations and styles -->
    <style>
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

        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15) !important;
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
            transition: all 0.3s ease;
        }

        .btn-gradient {
            background: linear-gradient(45deg, #2196F3, #21CBF3);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(45deg, #1976D2, #00BCD4);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(33, 150, 243, 0.3);
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, #2196F3 0%, #007bff 100%);
        }

        .section-padding {
            padding: 5rem 0;
        }

        .facility-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
        }

        .tech-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
        }

        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #007bff, #28a745, #ffc107, #17a2b8);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 50px;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-marker {
            position: absolute;
            left: -22px;
            top: 20px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 0 3px #dee2e6;
        }

        .timeline-content {
            margin-left: 30px;
        }

        .feature-highlight {
            transition: all 0.3s ease;
        }

        .feature-highlight:hover {
            transform: scale(1.05);
        }

        .counter {
            font-weight: bold;
            color: white;
        }

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
                // Counter animation
                function animateCounter(counter) {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const duration = 2000; // 2 seconds
                    const step = target / (duration / 16); // 60fps
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

                // Intersection Observer for counters
                const observerOptions = {
                    threshold: 0.5,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const counters = entry.target.querySelectorAll('.counter');
                            counters.forEach(counter => {
                                if (!counter.classList.contains('animated')) {
                                    counter.classList.add('animated');
                                    animateCounter(counter);
                                }
                            });
                        }
                    });
                }, observerOptions);

                // Observe the statistics section
                const statsSection = document.querySelector('.bg-gradient-primary');
                if (statsSection) {
                    observer.observe(statsSection);
                }

                // Smooth scrolling for anchor links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection

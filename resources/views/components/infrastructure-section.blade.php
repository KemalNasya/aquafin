<section id="infrastructure" class="section-padding bg-gradient-primary">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-gradient-primary mb-3 px-3 py-2 rounded-pill">Fasilitas Kami</span>
            <h2 class="fw-bold text-white mb-3">Fasilitas Utama</h2>
            <p class="text-white-75 lead">Komponen infrastruktur yang mendukung operasional budidaya ikan berkelanjutan
                di Kelompok "Pereng Mina" GAP</p>
        </div>

        <div class="row g-4">
            <!-- Kolam Budidaya -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-lg rounded-3 overflow-hidden hover-lift bg-white">
                    <div class="position-relative">
                        <img src="{{ asset('assets/kolam.jpg') }}" class="card-img-top w-100" alt="Kolam Budidaya"
                            style="height: 220px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-primary text-white px-3 py-2 rounded-pill small">
                                <i class="fas fa-water me-1"></i>Kolam
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold text-dark mb-3">Kolam Budidaya</h5>
                        <p class="card-text text-muted small mb-4">
                            Terdiri dari 26 kolam dengan luas bervariasi di area seluas 0,6 hektar.
                            Setiap kolam dikelola oleh anggota (PIC) dengan tanggung jawab penuh terhadap jenis ikan
                            yang dibudidayakan.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-ruler-combined me-1"></i>0.6 Ha
                            </small>
                            <small class="text-muted">
                                <i class="fas fa-fish me-1"></i>3 Jenis
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mesin Pengolah Pakan -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-lg rounded-3 overflow-hidden hover-lift bg-white">
                    <div class="position-relative">
                        <img src="{{ asset('assets/mesinnn.jpg') }}" class="card-img-top w-100"
                            alt="Mesin Pengolah Pakan" style="height: 220px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-success text-white px-3 py-2 rounded-pill small">
                                <i class="fas fa-cogs me-1"></i>Produksi
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold text-dark mb-3">Mesin Pengolah Pakan</h5>
                        <p class="card-text text-muted small mb-4">
                            Mesin pelet pakan ikan berfungsi untuk memproduksi pakan tenggelam berbentuk silinder (3–5
                            cm).
                            Bahan seperti tepung ikan, dedak, dan bungkil kedelai dicampur merata sebelum diproses.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-industry me-1"></i>Pelet
                            </small>
                            <small class="text-muted">
                                <i class="fas fa-recycle me-1"></i>Lokal
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instalasi PLTS -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-lg rounded-3 overflow-hidden hover-lift bg-white">
                    <div class="position-relative">
                        <img src="{{ asset('assets/tenaga.jpg') }}" class="card-img-top w-100" alt="Instalasi PLTS"
                            style="height: 220px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-gradient-primary px-3 py-2 rounded-pill small">
                                <i class="fas fa-solar-panel me-1"></i>Energi
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold text-dark mb-3">Instalasi PLTS</h5>
                        <p class="card-text text-muted small mb-4">
                            Sistem PLTS hybrid 1500 WP dipasang di gazebo utama dan berfungsi sebagai sumber daya
                            penerangan
                            serta penggerak pompa air. Mendukung operasional budidaya ikan yang ramah lingkungan.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-bolt me-1"></i>1500 WP
                            </small>
                            <small class="text-muted">
                                <i class="fas fa-leaf me-1"></i>Hijau
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="/infrastructure" class="btn btn-gradient px-5 py-3 rounded-pill fw-bold shadow-sm">
                <i class="fas fa-arrow-right me-2"></i>Lihat Semua Fasilitas
            </a>
        </div>
    </div>
</section>

<style>
    :root {
        --color-dark-blue: #0a2c4d;
        --color-medium-blue: #154e8d;
        --color-light-blue: #e3f2fd;
        --yellow-color: #ffc107;
    }

    .bg-gradient-primary {
        background: linear-gradient(135deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%) !important;
    }

    .section-padding {
        padding: 4rem 0;
    }

    .hover-lift {
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15) !important;
    }

    .text-white-75 {
        color: rgba(255, 255, 255, 0.75) !important;
    }

    .card-img-top {
        transition: transform 0.3s ease;
    }

    .card:hover .card-img-top {
        transform: scale(1.05);
    }

    .btn-warning {
        background: var(--yellow-color);
        border: none;
        color: var(--color-dark-blue);
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-warning:hover {
        background: #e0a800;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255, 193, 7, 0.4);
        color: var(--color-dark-blue);
    }

    .badge.bg-primary {
        background: var(--color-medium-blue) !important;
        font-weight: 500;
    }

    .badge.bg-success {
        background: #198754 !important;
        font-weight: 500;
    }

    .badge.bg-warning {
        background: var(--yellow-color) !important;
        font-weight: 500;
    }

    .card {
        transition: all 0.3s ease;
    }

    .col-lg-4,
    .col-md-6 {
        animation: fadeInUp 0.6s ease-out;
    }

    .col-lg-4:nth-child(1),
    .col-md-6:nth-child(1) {
        animation-delay: 0.1s;
    }

    .col-lg-4:nth-child(2),
    .col-md-6:nth-child(2) {
        animation-delay: 0.2s;
    }

    .col-lg-4:nth-child(3),
    .col-md-6:nth-child(3) {
        animation-delay: 0.3s;
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

    @media (max-width: 768px) {
        .section-padding {
            padding: 3rem 0;
        }

        .card-body {
            padding: 1.5rem !important;
        }

        .btn-warning {
            padding: 0.75rem 2rem;
        }
    }

    @media (max-width: 576px) {
        .section-padding {
            padding: 2rem 0;
        }

        .row.g-4 {
            gap: 1.5rem !important;
        }

        .card-body {
            padding: 1.25rem !important;
        }

        .card-img-top {
            height: 180px !important;
        }

        .d-flex.justify-content-between {
            flex-direction: column;
            gap: 0.5rem;
            align-items: start;
        }

        .d-flex.align-items-center {
            margin-bottom: 0.25rem;
        }
    }
</style>

@extends('layouts.app')

@section('title', 'About Us - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden" style="min-height: 70vh; background: url('{{ asset('assets/2.jpg') }}') center/cover no-repeat; display: flex; align-items: center;">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4" style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7); animation: fadeInUp 1s ease-out;">Tentang Kami</h1>
                    <p class="lead fs-4 mb-4" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 1.5s ease-out;">Pionir budidaya ikan modern yang menggabungkan teknologi canggih dengan praktik berkelanjutan untuk masa depan akuakultur Indonesia</p>
                    <div class="hero-buttons d-flex justify-content-center gap-3">
                        <a href="#vision" class="btn btn-primary btn-lg px-4 py-3 fs-5 shadow-lg" style="animation: fadeInUp 2s ease-out;"><i class="fas fa-eye me-2"></i>Visi & Misi</a>
                        <a href="#team" class="btn btn-outline-light btn-lg px-4 py-3 fs-5 shadow-lg" style="animation: fadeInUp 2.5s ease-out;"><i class="fas fa-users me-2"></i>Tim Ahli</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vision" class="section-padding py-5 py-md-5 position-relative overflow-hidden" style="background: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" style="animation: slideInLeft 1s ease-out;">
                    <img src="{{ asset('assets/2.jpg') }}" alt="Visi dan Misi Budidaya Ikan" class="img-fluid rounded shadow-lg hover-scale">
                </div>
                <div class="col-lg-6" style="animation: fadeInUp 1.2s ease-out;">
                    <h2 class="fw-bold mb-4 text-primary">Visi dan Misi</h2>
                    <div class="vision-mission mb-4">
                        <div class="feature-item d-flex mb-4 p-4 rounded shadow-sm hover-lift bg-white">
                            <i class="fas fa-eye text-primary me-3 mt-1 fs-2"></i>
                            <div>
                                <h4 class="text-primary mb-2">Visi</h4>
                                <p class="text-muted mb-0">Menjadi pemimpin nasional dalam budidaya ikan berkelanjutan yang mengintegrasikan teknologi modern untuk memenuhi kebutuhan protein hewani berkualitas tinggi bagi masyarakat Indonesia.</p>
                            </div>
                        </div>
                        <div class="feature-item d-flex mb-4 p-4 rounded shadow-sm hover-lift bg-white">
                            <i class="fas fa-bullseye text-success me-3 mt-1 fs-2"></i>
                            <div>
                                <h4 class="text-success mb-2">Misi</h4>
                                <ul class="text-muted mb-0 ps-3">
                                    <li>Mengembangkan sistem budidaya ikan modern dengan efisiensi tinggi dan ramah lingkungan</li>
                                    <li>Memberikan produk ikan segar berkualitas premium melalui rantai pasok yang terintegrasi</li>
                                    <li>Mendukung petani lokal dan komunitas melalui program pelatihan dan transfer teknologi akuakultur</li>
                                    <li>Menciptakan ekosistem budidaya yang berkelanjutan untuk generasi mendatang</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="section-padding py-5 py-md-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary mb-3" style="animation: fadeInUp 1s ease-out;">Tim Ahli Kami</h2>
                <p class="lead text-muted" style="animation: fadeInUp 1.2s ease-out;">Para ahli akuakultur dengan pengalaman bertahun-tahun dalam budidaya ikan modern</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 mb-4" style="animation: fadeInUp 1.5s ease-out;">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                        <div class="card-body text-center p-4">
                            <img src="{{ asset('assets/2.jpg') }}" alt="Dr. Ahmad Santoso" class="rounded-circle mb-3 mx-auto" style="width: 120px; height: 120px; object-fit: cover;">
                            <h5 class="card-title fw-bold">Dr. Ahmad Santoso</h5>
                            <p class="text-primary mb-2">Direktur Teknik & Akuakultur</p>
                            <p class="text-muted small">Ahli akuakultur dengan pengalaman 15+ tahun dalam sistem budidaya intensif dan teknologi IoT untuk monitoring kualitas air.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" style="animation: fadeInUp 1.7s ease-out;">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                        <div class="card-body text-center p-4">
                            <img src="{{ asset('assets/2.jpg') }}" alt="Ir. Siti Nurhaliza" class="rounded-circle mb-3 mx-auto" style="width: 120px; height: 120px; object-fit: cover;">
                            <h5 class="card-title fw-bold">Ir. Siti Nurhaliza</h5>
                            <p class="text-primary mb-2">Manajer Operasional</p>
                            <p class="text-muted small">Spesialis dalam manajemen produksi ikan dengan fokus pada efisiensi operasional dan pengendalian biaya budidaya berkelanjutan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" style="animation: fadeInUp 1.9s ease-out;">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                        <div class="card-body text-center p-4">
                            <img src="{{ asset('assets/2.jpg') }}" alt="Dr. Budi Prasetyo" class="rounded-circle mb-3 mx-auto" style="width: 120px; height: 120px; object-fit: cover;">
                            <h5 class="card-title fw-bold">Dr. Budi Prasetyo</h5>
                            <p class="text-primary mb-2">Kepala Riset & Pengembangan</p>
                            <p class="text-muted small">Peneliti senior dalam nutrisi ikan dan pengembangan pakan alternatif untuk meningkatkan produktivitas dan keberlanjutan budidaya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS for animations and styles -->
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            transition: all 0.3s ease;
        }
        .btn-gradient {
            background: linear-gradient(45deg, #2196F3, #21CBF3);
            border: none;
            color: white;
        }
        .btn-gradient:hover {
            background: linear-gradient(45deg, #1976D2, #00BCD4);
            color: white;
        }
        .section-padding {
            padding: 5rem 0;
        }
        @media (max-width: 768px) {
            .section-padding {
                padding: 3rem 0;
            }
            .hero-section {
                min-height: 50vh;
            }
        }
    </style>
@endsection

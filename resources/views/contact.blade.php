@extends('layouts.app')

@section('title', 'Contact - Company Name')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden" style="min-height: 60vh; background: url('{{ asset('assets/2.jpg') }}') center/cover no-repeat; display: flex; align-items: center;">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4" style="text-shadow: 3px 3px 6px rgba(0,0,0,0.7); animation: fadeInUp 1s ease-out;">Hubungi Kami</h1>
                    <p class="lead fs-4 mb-4" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); animation: fadeInUp 1.5s ease-out;">Kami siap membantu Anda dengan layanan budidaya ikan terbaik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 section-padding">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
                        <div class="card-header bg-primary text-white py-4">
                            <h3 class="fw-bold mb-0"><i class="fas fa-envelope me-2"></i>Kirim Pesan</h3>
                        </div>
                        <div class="card-body p-4">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label fw-bold">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-lg" id="name" name="name" required placeholder="Masukkan nama lengkap">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label fw-bold">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email" required placeholder="Masukkan alamat email">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label fw-bold">Subjek</label>
                                    <input type="text" class="form-control form-control-lg" id="subject" name="subject" required placeholder="Subjek pesan">
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label fw-bold">Pesan</label>
                                    <textarea class="form-control form-control-lg" id="message" name="message" rows="5" required placeholder="Tulis pesan Anda di sini..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-lg rounded-3 overflow-hidden mb-4">
                        <div class="card-header bg-success text-white py-4">
                            <h3 class="fw-bold mb-0"><i class="fas fa-info-circle me-2"></i>Informasi Kontak</h3>
                        </div>
                        <div class="card-body p-4">
                            <div class="contact-info">
                                <div class="d-flex mb-4 pb-3 border-bottom">
                                    <div class="icon-wrapper me-3" style="width: 50px; height: 50px; background: linear-gradient(45deg, #007bff, #00bcd4); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi-geo-alt text-white fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Alamat</h6>
                                        <p class="text-muted mb-0 small">Jl. Contoh No. 123<br>Jakarta Selatan, Indonesia</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-4 pb-3 border-bottom">
                                    <div class="icon-wrapper me-3" style="width: 50px; height: 50px; background: linear-gradient(45deg, #28a745, #20c997); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi-telephone text-white fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Telepon</h6>
                                        <p class="text-muted mb-0 small">+62 21 1234 5678</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-4 pb-3 border-bottom">
                                    <div class="icon-wrapper me-3" style="width: 50px; height: 50px; background: linear-gradient(45deg, #dc3545, #fd7e14); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi-envelope text-white fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Email</h6>
                                        <p class="text-muted mb-0 small">info@company.com</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="icon-wrapper me-3" style="width: 50px; height: 50px; background: linear-gradient(45deg, #ffc107, #e83e8c); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi-clock text-white fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Jam Operasional</h6>
                                        <p class="text-muted mb-0 small">Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 12:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Contact -->
                    <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
                        <div class="card-header bg-info text-white py-4">
                            <h5 class="fw-bold mb-0"><i class="fas fa-comments me-2"></i>Kontak Cepat</h5>
                        </div>
                        <div class="card-body p-4">
                            <p class="text-muted small mb-3">Butuh bantuan segera? Hubungi kami melalui:</p>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/622112345678" class="btn btn-success rounded-pill" target="_blank">
                                    <i class="fab fa-whatsapp me-2"></i>WhatsApp
                                </a>
                                <a href="tel:+622112345678" class="btn btn-primary rounded-pill">
                                    <i class="fas fa-phone me-2"></i>Telepon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold mb-3">Lokasi Kami</h2>
                        <p class="lead text-muted">Temukan lokasi kantor kami di peta</p>
                    </div>
                    <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="map-container" style="height: 500px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.816666!3d-6.200000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2c764b12d%3A0x1234567890abcdef!2sJakarta%20Selatan!5e0!3m2!1sen!2sid!4v1697123456789!5m2!1sen!2sid"
                                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS -->
    <style>
        .hero-section {
            position: relative;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .section-padding {
            padding: 5rem 0;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
        }
        .btn {
            transition: all 0.3s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
        }
        .icon-wrapper {
            transition: transform 0.3s ease;
        }
        .icon-wrapper:hover {
            transform: scale(1.1);
        }
        .map-container iframe {
            border-radius: 0.375rem;
        }
    </style>
@endsection

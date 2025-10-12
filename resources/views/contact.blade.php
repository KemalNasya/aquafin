@extends('layouts.app')

@section('title', 'Contact - Company Name')

@section('content')
    <section class="hero-section position-relative overflow-hidden" 
        style="min-height: 89vh; display: flex; align-items: center;">
        
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: url('{{ asset('assets/jj.jpg') }}') center/cover no-repeat; 
                    background-size: cover; filter: brightness(60%); z-index: -1;">
        </div>
        
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay">
        </div>

        <div class="container position-relative text-center text-white py-5" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="display-4 fw-bold mb-3 text-shadow-dark animate-fade-in" 
                        style="animation-delay: 0.2s;">
                        Hubungi Kami
                    </h1>
                    <p class="lead fs-5 mb-5 text-shadow-dark opacity-75 animate-fade-in" 
                        style="animation-delay: 0.4s;">
                        Kami siap membantu Anda dengan layanan budidaya ikan terbaik dan konsultasi profesional.
                    </p>
                    
                    <a href="https://wa.me/622112345678" target="_blank"
                       class="btn btn-lg btn-modern-primary rounded-pill shadow-lg animate-fade-in"
                        style="animation-delay: 0.6s;">
                        <i class="fab fa-whatsapp me-2"></i> Hubungi Kami via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 section-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-header text-white py-3 bg-gradient-custom">
                            <h3 class="fw-bold mb-0 fs-5">
                                <i class="fas fa-envelope me-2"></i>Kirim Pesan
                            </h3>
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
                                        <label for="name" class="form-label fw-bold small">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" required placeholder="Masukkan nama lengkap">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label fw-bold small">Email</label>
                                        <input type="email" class="form-control form-control-sm" id="email" name="email" required placeholder="Masukkan alamat email">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label fw-bold small">Subjek</label>
                                    <input type="text" class="form-control form-control-sm" id="subject" name="subject" required placeholder="Subjek pesan">
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label fw-bold small">Pesan</label>
                                    <textarea class="form-control form-control-sm" id="message" name="message" rows="5" required placeholder="Tulis pesan Anda di sini..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-modern-primary px-4 py-2 fs-6 rounded-pill shadow">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow rounded-3 overflow-hidden mb-4">
                        <div class="card-header text-white py-3 bg-gradient-custom">
                            <h3 class="fw-bold mb-0 fs-6"><i class="fas fa-info-circle me-2"></i>Informasi Kontak</h3>
                        </div>
                        <div class="card-body p-4 small">
                            <div class="contact-info">
                                <div class="d-flex mb-3 pb-3 border-bottom">
                                    <div class="icon-wrapper me-3 bg-primary">
                                        <i class="bi-geo-alt text-white fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Alamat</h6>
                                        <p class="text-muted mb-0">Jl. Contoh No. 123<br>Jakarta Selatan, Indonesia</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3 pb-3 border-bottom">
                                    <div class="icon-wrapper me-3 bg-success">
                                        <i class="bi-telephone text-white fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Telepon</h6>
                                        <p class="text-muted mb-0">+62 21 1234 5678</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3 pb-3 border-bottom">
                                    <div class="icon-wrapper me-3 bg-danger">
                                        <i class="bi-envelope text-white fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Email</h6>
                                        <p class="text-muted mb-0">info@company.com</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="icon-wrapper me-3 bg-warning">
                                        <i class="bi-clock text-white fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Jam Operasional</h6>
                                        <p class="text-muted mb-0">Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 12:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-header text-white py-3 bg-gradient-custom">
                            <h5 class="fw-bold mb-0 fs-6"><i class="fas fa-comments me-2"></i>Kontak Cepat Lainnya</h5>
                        </div>
                        <div class="card-body p-4">
                            <p class="text-muted small mb-3">Butuh bantuan segera? Hubungi kami melalui:</p>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/622112345678" class="btn btn-success rounded-pill px-4 py-2 fs-6 hover-lift" target="_blank">
                                    <i class="fab fa-whatsapp me-2"></i>WhatsApp
                                </a>
                                <a href="tel:+622112345678" class="btn btn-primary rounded-pill px-4 py-2 fs-6 hover-lift bg-gradient-custom-primary" >
                                    <i class="fas fa-phone me-2"></i>Telepon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2" style="font-size: 1.8rem;">Lokasi Kami</h2>
                <p class="text-muted" style="font-size: 1rem;">Temukan lokasi kantor kami di peta</p>
            </div>
            <div class="card border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-0">
                    <div class="map-container" style="height: 400px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.816666!3d-6.200000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2c764b12d%3A0x1234567890abcdef!2sJakarta%20Selatan!5e0!3m2!1sen!2sid!4v1697123456789!5m2!1sen!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Global Color Variables */
    :root {
        --color-dark-blue: #0a2c4d;
        --color-medium-blue: #154e8d;
    }

    /* Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeInUp 1s ease-out;
    }
    
    /* Hero Section Specific Styles */
    .hero-section {
        background: none !important; /* Hapus background lama */
    }
    
    .hero-overlay {
        /* Gradasi hitam transparan (rgba(0,0,0,0.3)) ke pekat (rgba(0,0,0,0.85)) */
        background: linear-gradient(90deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.85) 100%);
        opacity: 1; 
        z-index: 1;
    }
    
    .text-shadow-dark {
         /* Teks putih terlihat sangat kontras dan profesional */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9); 
    }

    /* Custom Gradient & Button Styling */
    .bg-gradient-custom {
        background: linear-gradient(90deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
    }

    .bg-gradient-custom-primary {
        background: var(--color-dark-blue);
        border: none;
    }
    
    /* Tombol Biru Modern dengan efek hover lift + glow shadow */
    .btn-modern-primary {
        background: linear-gradient(90deg, #154e8d 0%, #0a2c4d 100%);
        border: none;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(21, 78, 141, 0.4);
    }

    .btn-modern-primary:hover {
        transform: translateY(-3px); /* Hover lift */
        opacity: 0.95;
        box-shadow: 0 8px 20px rgba(21, 78, 141, 0.6); /* Glow shadow */
        color: white;
    }

    /* General Styling */
    .section-padding { padding: 4rem 0; }
    .card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .card:hover { transform: translateY(-3px); box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important; }
    .form-control:focus { border-color: var(--color-medium-blue); box-shadow: 0 0 0 0.2rem rgba(21,78,141,0.25); }
    .btn { transition: all 0.3s ease; }
    .hover-lift:hover { transform: translateY(-2px); }

    .icon-wrapper {
        width: 40px; height: 40px; border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        color: white; transition: transform 0.3s ease;
    }
    .icon-wrapper:hover { transform: scale(1.1); }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
        .hero-section h1 {
            font-size: 2.5rem !important;
        }
        
        .hero-section p.lead {
            font-size: 1.25rem !important;
        }
    }
    
    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2rem !important;
        }
        
        .hero-section p.lead {
            font-size: 1.1rem !important;
        }
        
        .btn-modern-primary {
            font-size: 1rem !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth fade-in animation for all elements with class 'animate-fade-in'
        // This is primarily handled by CSS, but this function can be used for staggered effects if needed.
        const animatedElements = document.querySelectorAll('.animate-fade-in');
        animatedElements.forEach((el, index) => {
            el.style.opacity = 0;
            // Apply delay based on animation-delay CSS property
            el.style.animation = 'none';
            el.offsetHeight; // Trigger reflow
            el.style.animation = `fadeInUp 1s ease-out forwards ${el.style.getPropertyValue('animation-delay')}`;
        });
    });
</script>
@endpush
@extends('layouts.app')

@section('title', 'Kontak - Pereng Mina GAP')

@section('content')
    <section class="hero-section position-relative overflow-hidden" 
        style="min-height: 70vh; display: flex; align-items: center;">
        
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: url('{{ asset('assets/jj.jpg') }}') center/cover no-repeat; 
                    background-size: cover; filter: brightness(60%); z-index: -1;">
        </div>
        
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay">
        </div>

        <div class="container position-relative text-center text-white py-5" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <span class="badge bg-primary-gradient mb-3 px-3 py-2 rounded-pill">Hubungi Kami</span>
                    
                    <h1 class="display-5 fw-bold mb-3 text-shadow-dark animate-fade-in" 
                        style="animation-delay: 0.2s;">
                        Hubungi Pereng Mina GAP
                    </h1>
                    <p class="lead fs-6 mb-4 text-shadow-dark opacity-75 animate-fade-in" 
                        style="animation-delay: 0.4s;">
                        Kami siap membantu Anda dengan layanan budidaya ikan terbaik dan konsultasi profesional.
                    </p>
                    
                    <a href="https://wa.me/6281344535062" target="_blank"
                       class="btn btn-lg btn-modern-primary rounded-pill shadow-lg animate-fade-in px-4 py-2"
                        style="animation-delay: 0.6s;">
                        <i class="fab fa-whatsapp me-2"></i> Hubungi via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-header text-white py-3 bg-gradient-custom">
                            <h3 class="fw-bold mb-0 fs-6">
                                <i class="fas fa-envelope me-2"></i>Kirim Pesan
                            </h3>
                        </div>
                        <div class="card-body p-4">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show small" role="alert">
                                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                                    <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert"></button>
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
                                    <textarea class="form-control form-control-sm" id="message" name="message" rows="4" required placeholder="Tulis pesan Anda di sini..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-modern-primary px-4 py-2 fs-6 rounded-pill shadow-sm">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow rounded-3 overflow-hidden mb-3">
                        <div class="card-header text-white py-3 bg-gradient-custom">
                            <h3 class="fw-bold mb-0 fs-6"><i class="fas fa-info-circle me-2"></i>Informasi Kontak</h3>
                        </div>
                        <div class="card-body p-3 small">
                            <div class="contact-info">
                                <div class="d-flex mb-3 pb-2 border-bottom">
                                    <div class="icon-wrapper me-3 bg-primary">
                                        <i class="fas fa-map-marker-alt text-white fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Alamat</h6>
                                        <p class="text-muted mb-0 small">Nogotirto, Gamping<br>Sleman, DIY</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3 pb-2 border-bottom">
                                    <div class="icon-wrapper me-3 bg-success">
                                        <i class="fas fa-phone text-white fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Telepon</h6>
                                        <p class="text-muted mb-0 small">+6281344535062</p>
                                    </div>
                                </div>
                                <div class="d-flex mb-3 pb-2 border-bottom">
                                    <div class="icon-wrapper me-3 bg-danger">
                                        <i class="fas fa-envelope text-white fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Email</h6>
                                        <p class="text-muted mb-0 small">perengmina@gmail.com</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="icon-wrapper me-3 bg-warning">
                                        <i class="fas fa-clock text-white fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-1">Jam Operasional</h6>
                                        <p class="text-muted mb-0 small">Senin - Minggu: 08:00 - 17:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-header text-white py-3 bg-gradient-custom">
                            <h5 class="fw-bold mb-0 fs-6"><i class="fas fa-comments me-2"></i>Kontak Cepat</h5>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-muted small mb-3">Butuh bantuan segera? Hubungi kami melalui:</p>
                            <div class="d-grid gap-2">
                                <a href="https://wa.me/6281344535062" class="btn btn-success rounded-pill px-3 py-2 fs-6 hover-lift shadow-sm" target="_blank">
                                    <i class="fab fa-whatsapp me-2"></i>WhatsApp
                                </a>
                                <a href="tel:+6281344535062" class="btn btn-primary rounded-pill px-3 py-2 fs-6 hover-lift shadow-sm bg-gradient-custom-primary">
                                    <i class="fas fa-phone me-2"></i>Telepon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-4">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2 fs-5">Lokasi Kami</h2>
                <p class="text-muted small">Temukan lokasi budidaya ikan kami di peta</p>
            </div>
            <div class="card border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-0">
                    <div class="map-container" style="height: 350px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.207599094233!2d110.327011!3d-7.779777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5835f4e517c3%3A0x1b3a3b3b3b3b3b3b!2sNogotirto%2C%20Gamping%2C%20Sleman%2C%20DIY!5e0!3m2!1sen!2sid!4v1697123456789!5m2!1sen!2sid"
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
    :root {
        --color-dark-blue: #0a2c4d;
        --color-medium-blue: #154e8d;
        --yellow-color: #ffc107;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeInUp 1s ease-out;
    }

    .hero-section {
        background: none !important;
    }

    .hero-overlay {
        background: linear-gradient(90deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.85) 100%);
        opacity: 1;
        z-index: 1;
    }

    .text-shadow-dark {
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.9);
    }

    .bg-primary-gradient {
        background: linear-gradient(90deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%) !important;
        border: none;
    }

    .bg-gradient-custom {
        background: linear-gradient(90deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
    }

    .bg-gradient-custom-primary {
        background: var(--color-dark-blue);
        border: none;
    }

    .btn-modern-primary {
        background: linear-gradient(90deg, #154e8d 0%, #0a2c4d 100%);
        border: none;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(21, 78, 141, 0.4);
    }

    .btn-modern-primary:hover {
        transform: translateY(-2px);
        opacity: 0.95;
        box-shadow: 0 6px 18px rgba(21, 78, 141, 0.6);
        color: white;
    }

    .section-padding { padding: 2.5rem 0; }
    .card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .card:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.12) !important; }
    .form-control:focus {
        border-color: var(--color-medium-blue);
        box-shadow: 0 0 0 0.15rem rgba(21,78,141,0.2);
    }
    .btn { transition: all 0.3s ease; }
    .hover-lift:hover { transform: translateY(-1px); }

    .icon-wrapper {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: transform 0.3s ease;
        font-size: 0.9rem;
    }
    .icon-wrapper:hover { transform: scale(1.05); }

    .card-body.p-3 { padding: 1rem !important; }
    .card-body.p-4 { padding: 1.5rem !important; }
    .mb-3 { margin-bottom: 1rem !important; }
    .mb-4 { margin-bottom: 1.5rem !important; }

    @media (max-width: 992px) {
        .hero-section h1 {
            font-size: 2rem !important;
        }

        .hero-section p.lead {
            font-size: 1.1rem !important;
        }

        .section-padding { padding: 2rem 0; }
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: 60vh;
        }

        .hero-section h1 {
            font-size: 1.75rem !important;
        }

        .hero-section p.lead {
            font-size: 1rem !important;
        }

        .btn-modern-primary {
            font-size: 0.9rem !important;
            padding: 0.5rem 1.5rem;
        }

        .map-container {
            height: 300px !important;
        }
    }

    @media (max-width: 576px) {
        .hero-section {
            min-height: 50vh;
        }

        .container.position-relative.text-center.text-white.py-5 {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }

        .card-body.p-3, .card-body.p-4 {
            padding: 1rem !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth fade-in animation for all elements with class 'animate-fade-in'
        const animatedElements = document.querySelectorAll('.animate-fade-in');
        animatedElements.forEach((el, index) => {
            el.style.opacity = 0;
            el.style.animation = 'none';
            el.offsetHeight; // Trigger reflow
            el.style.animation = `fadeInUp 1s ease-out forwards ${el.style.getPropertyValue('animation-delay')}`;
        });
    });
</script>
@endpush
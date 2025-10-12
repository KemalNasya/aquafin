<section id="contact" class="section-padding py-5 text-white"
    style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%); border-bottom: 2px solid rgba(255,255,255,0.2); transition: all 0.3s ease;">

    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-yellow mb-3" style="font-size: clamp(1.8rem, 4vw, 2.2rem);">Hubungi Kami</h2>
            <p class="lead text-white-75" style="font-size: clamp(0.9rem, 2vw, 1.05rem);">
                Siap membantu Anda dengan informasi budidaya ikan berkualitas dan berkelanjutan
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="contact-info">
                    <h4 class="fw-bold mb-4 text-yellow" style="font-size: clamp(1.5rem, 3vw, 2rem);">Informasi Kontak</h4>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="contact-item d-flex p-3 p-md-4 bg-white rounded-3 shadow border h-100 align-items-start">
                                <i class="fas fa-map-marker-alt text-yellow fs-4 me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-2 custom-text-primary fs-6">Alamat Peternakan</h6>
                                    <p class="text-muted-dark mb-0 small">
                                        Pereng Mina GAP, Kwarasan Sleman
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-item d-flex p-3 p-md-4 bg-white rounded-3 shadow border h-100 align-items-start">
                                <i class="fas fa-phone text-yellow fs-4 me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-2 custom-text-primary fs-6">Telepon</h6>
                                    <p class="text-muted-dark mb-0 small">
                                        +6281344535062
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-item d-flex p-3 p-md-4 bg-white rounded-3 shadow border h-100 align-items-start">
                                <i class="fas fa-envelope text-yellow fs-4 me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-2 custom-text-primary fs-6">Email</h6>
                                    <p class="text-muted-dark mb-0 small">
                                        PerengMina@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-item d-flex p-3 p-md-4 bg-white rounded-3 shadow border h-100 align-items-start">
                                <i class="fas fa-clock text-yellow fs-4 me-3 mt-1"></i>
                                <div>
                                    <h6 class="fw-bold mb-2 custom-text-primary fs-6">Jam Operasional</h6>
                                    <p class="text-muted-dark mb-0 small">
                                        Senin - Jumat: 07:00 - 18:00<br>
                                        Sabtu: 07:00 - 14:00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="social-section mb-4">
                    <h6 class="fw-bold mb-3 text-yellow fs-6">Ikuti Kami</h6>
                    <div class="social-links d-flex gap-3">
                        <a href="#" class="social-link text-yellow fs-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link text-yellow fs-4"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="contact-button">
                    <a href="{{ route('contact') }}" class="btn btn-dark-blue-gradient px-4 py-3 shadow">
                        <i class="fas fa-address-book me-2 fs-6"></i>Kontak Lengkap
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --dark-blue-color: #002244;
            --light-blue-color: #1a4c8a;
            --primary-color: #003366;
            --yellow-color: #ffc107;
            --gradient-start: #0a2c4d;
            --gradient-end: #154e8d;
        }

        .text-yellow { color: var(--yellow-color) !important; }
        .custom-text-primary { color: var(--primary-color) !important; }
        .text-white-75 { color: rgba(255, 255, 255, 0.75) !important; }
        .text-muted-dark { color: #6c757d !important; }

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
            box-shadow: 0 6px 12px rgba(0, 34, 68, 0.4);
        }

        .contact-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15) !important;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            color: var(--yellow-color) !important;
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .contact-info h4 {
                text-align: center;
                margin-bottom: 2rem;
            }

            .social-section {
                text-align: center;
            }

            .contact-button {
                text-align: center;
                margin-top: 2rem;
            }

            .social-links {
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .contact-item {
                padding: 1rem !important;
            }

            .contact-item i {
                font-size: 1.5rem !important;
                margin-right: 0.75rem !important;
            }

            .social-links {
                gap: 1.5rem;
            }
        }
    </style>
</section>

<!-- ======= Section: Hubungi Kami ======= -->
<section id="contact" class="section-padding py-5 text-white" 
    style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%); border-bottom: 2px solid rgba(255,255,255,0.2); transition: all 0.3s ease;">
    
    <div class="container">
        <!-- Judul Section -->
        <div class="text-center mb-4">
            <h2 class="fw-bold text-yellow mb-2" style="font-size: 2.2rem;">Hubungi Kami</h2>
            <p class="lead text-white-75" style="font-size: 1.05rem;">
                Siap membantu Anda dengan informasi budidaya ikan berkualitas dan berkelanjutan
            </p>
        </div>

        <div class="row g-4">
            <!-- Kolom Kiri: Formulir -->
            <div class="col-lg-6">
                <div class="contact-form bg-light-transparant-white p-4 rounded-3 shadow hover-lift">
                    <h4 class="fw-bold mb-3 custom-text-primary" style="font-size: 2.2rem;">Kirim Pesan Cepat</h4>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="contact_name" class="form-label fw-bold text-dark-grey fs-6">Nama</label>
                                <input type="text" class="form-control form-control-lg fs-6" id="contact_name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact_email" class="form-label fw-bold text-dark-grey fs-6">Email</label>
                                <input type="email" class="form-control form-control-lg fs-6" id="contact_email" name="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contact_subject" class="form-label fw-bold text-dark-grey fs-6">Subjek</label>
                            <input type="text" class="form-control form-control-lg fs-6" id="contact_subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact_message" class="form-label fw-bold text-dark-grey fs-6">Pesan</label>
                            <textarea class="form-control form-control-lg fs-6" id="contact_message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark-blue-gradient px-4 py-2 shadow">
                            <i class="fas fa-paper-plane me-2 fs-6"></i>Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <!-- Kolom Kanan: Info Kontak -->
            <div class="col-lg-6">
                <div class="contact-info">
                    <h4 class="fw-bold mb-3 text-yellow" style="font-size: 2.2rem;">Informasi Kontak</h4>

                    <div class="contact-item d-flex mb-3 p-3 bg-light-transparant-white rounded-3 shadow hover-lift-small">
                        <i class="fas fa-map-marker-alt text-yellow fs-4 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1 custom-text-primary fs-6">Alamat Peternakan</h6>
                            <p class="text-muted-dark mb-0 small">
                                Desa Sumber Rejo, Kec. Budidaya<br>Jawa Timur, Indonesia 61234
                            </p>
                        </div>
                    </div>

                    <div class="contact-item d-flex mb-3 p-3 bg-light-transparant-white rounded-3 shadow hover-lift-small">
                        <i class="fas fa-phone text-yellow fs-4 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1 custom-text-primary fs-6">Telepon</h6>
                            <p class="text-muted-dark mb-0 small">
                                +62 5705232943<br>+62 5705232944
                            </p>
                        </div>
                    </div>

                    <div class="contact-item d-flex mb-3 p-3 bg-light-transparant-white rounded-3 shadow hover-lift-small">
                        <i class="fas fa-envelope text-yellow fs-4 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1 custom-text-primary fs-6">Email</h6>
                            <p class="text-muted-dark mb-0 small">
                                info@budidayaikan.com<br>penjualan@budidayaikan.com
                            </p>
                        </div>
                    </div>

                    <div class="contact-item d-flex mb-3 p-3 bg-light-transparant-white rounded-3 shadow hover-lift-small">
                        <i class="fas fa-clock text-yellow fs-4 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1 custom-text-primary fs-6">Jam Operasional</h6>
                            <p class="text-muted-dark mb-0 small">
                                Senin - Jumat: 07:00 - 18:00<br>Sabtu: 07:00 - 14:00
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sosial Media -->
                <div class="mt-3">
                    <h6 class="fw-bold mb-2 text-yellow fs-6">Ikuti Kami</h6>
                    <div class="social-links d-flex gap-3">
                        <a href="#" class="social-link text-yellow fs-5"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link text-yellow fs-5"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link text-yellow fs-5"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link text-yellow fs-5"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Tombol Kontak Lengkap -->
                <div class="mt-3">
                    <a href="{{ route('contact') }}" class="btn btn-dark-blue-gradient px-4 py-2 shadow">
                        <i class="fas fa-address-book me-2 fs-6"></i>Kontak Lengkap
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= STYLE KHUSUS SECTION INI ======= -->
    <style>
        /* Font Google */
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

        .bg-light-transparant-white {
            background-color: rgba(255, 255, 255, 0.9) !important;
        }
        .text-dark-grey { color: #343a40 !important; }
        .text-muted-dark { color: #6c757d !important; }

        /* Tombol Gradient */
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

        /* Hover Card Halus */
        .hover-lift-small:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2) !important;
            transition: all 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15) !important;
            transition: all 0.3s ease;
        }

        /* Hover Sosial Media */
        .social-link:hover {
            color: var(--yellow-color) !important;
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
    </style>
</section>

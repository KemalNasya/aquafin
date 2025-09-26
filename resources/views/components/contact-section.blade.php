<section id="contact" class="section-padding py-5 py-md-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary mb-3">Hubungi Kami</h2>
            <p class="lead text-muted">Siap membantu Anda dengan informasi budidaya ikan berkualitas dan berkelanjutan</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="contact-form bg-light p-4 rounded-3 shadow-sm">
                    <h4 class="fw-bold mb-4 text-primary">Kirim Pesan Cepat</h4>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="contact_name" class="form-label fw-bold">Nama</label>
                                <input type="text" class="form-control form-control-lg" id="contact_name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact_email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control form-control-lg" id="contact_email" name="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contact_subject" class="form-label fw-bold">Subjek</label>
                            <input type="text" class="form-control form-control-lg" id="contact_subject" name="subject" required>
                        </div>
                        <div class="mb-4">
                            <label for="contact_message" class="form-label fw-bold">Pesan</label>
                            <textarea class="form-control form-control-lg" id="contact_message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-gradient btn-lg px-4 py-3 shadow-lg"><i class="fas fa-paper-plane me-2"></i>Kirim Pesan</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-info">
                    <h4 class="fw-bold mb-4 text-primary">Informasi Kontak</h4>
                    <div class="contact-item d-flex mb-4 p-3 bg-light rounded-3">
                        <i class="fas fa-map-marker-alt text-primary fs-3 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Alamat Peternakan</h6>
                            <p class="text-muted mb-0">Desa Sumber Rejo, Kec. Budidaya<br>Jawa Timur, Indonesia 61234</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-4 p-3 bg-light rounded-3">
                        <i class="fas fa-phone text-primary fs-3 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Telepon</h6>
                            <p class="text-muted mb-0">+62 321 4567 8901<br>+62 321 0987 6543</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-4 p-3 bg-light rounded-3">
                        <i class="fas fa-envelope text-primary fs-3 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Email</h6>
                            <p class="text-muted mb-0">info@budidayaikan.com<br>penjualan@budidayaikan.com</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-4 p-3 bg-light rounded-3">
                        <i class="fas fa-clock text-primary fs-3 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1">Jam Operasional</h6>
                            <p class="text-muted mb-0">Senin - Jumat: 07:00 - 18:00<br>Sabtu: 07:00 - 14:00</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h6 class="fw-bold mb-3 text-primary">Ikuti Kami</h6>
                    <div class="social-links d-flex gap-3">
                        <a href="#" class="social-link text-primary fs-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link text-primary fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link text-primary fs-4"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link text-primary fs-4"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-gradient btn-lg px-4 py-3 shadow-lg"><i class="fas fa-address-book me-2"></i>Kontak Lengkap</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom CSS -->
    <style>
        .contact-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1) !important;
            transition: all 0.3s ease;
        }
        .btn-gradient {
            background: linear-gradient(45deg, #007bff, #00bcd4);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-gradient:hover {
            background: linear-gradient(45deg, #0056b3, #0097a7);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
        }
    </style>
</section>

<section id="contact" class="section-padding py-5 py-md-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Hubungi Kami</h2>
            <p class="lead text-muted">Siap membantu Anda dengan informasi budidaya ikan berkualitas dan berkelanjutan</p>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="contact-form bg-light p-4 rounded shadow-sm">
                    <h4 class="fw-bold mb-4">Kirim Pesan Cepat</h4>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="contact_name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="contact_name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="contact_email" name="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contact_subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="contact_subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact_message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="contact_message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                    <div class="contact-info">
                        <h4 class="fw-bold mb-4">Informasi Kontak</h4>
                        <div class="d-flex mb-4">
                            <i class="bi-geo-alt text-primary me-3 fs-4"></i>
                            <div>
                                <h6 class="fw-bold">Alamat Peternakan</h6>
                                <p class="text-muted mb-0">Desa Sumber Rejo, Kec. Budidaya<br>Jawa Timur, Indonesia 61234</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="bi-telephone text-primary me-3 fs-4"></i>
                            <div>
                                <h6 class="fw-bold">Telepon</h6>
                                <p class="text-muted mb-0">+62 321 4567 8901<br>+62 321 0987 6543</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="bi-envelope text-primary me-3 fs-4"></i>
                            <div>
                                <h6 class="fw-bold">Email</h6>
                                <p class="text-muted mb-0">info@budidayaikan.com<br>penjualan@budidayaikan.com</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="bi-clock text-primary me-3 fs-4"></i>
                            <div>
                                <h6 class="fw-bold">Jam Operasional</h6>
                                <p class="text-muted mb-0">Senin - Jumat: 07:00 - 18:00<br>Sabtu: 07:00 - 14:00</p>
                            </div>
                        </div>
                    </div>

                <div class="mt-4">
                    <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                    <div class="social-links">
                        <a href="#" class="text-primary me-3 fs-5"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-primary me-3 fs-5"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-primary me-3 fs-5"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-primary me-3 fs-5"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">Kontak Lengkap</a>
                </div>
            </div>
        </div>
    </div>
</section>

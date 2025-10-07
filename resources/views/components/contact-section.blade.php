<section id="contact" class="section-padding py-5 py-md-5 text-white" 
    style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%); border-bottom: 2px solid rgba(255,255,255,0.2); transition: all 0.3s ease;">
    
    <div class="container">
        <div class="text-center mb-5">
            {{-- Judul dan Lead diubah ke text-white dan text-white-75 --}}
            <h2 class="fw-bold text-yellow mb-3">Hubungi Kami</h2>
            <p class="lead text-white-75">Siap membantu Anda dengan informasi budidaya ikan berkualitas dan berkelanjutan</p>
        </div>

        <div class="row g-4">
            {{-- Kolom Kiri: Form --}}
            <div class="col-lg-6">
                {{-- Form diubah dari bg-light menjadi card dengan background putih transparan --}}
                <div class="contact-form bg-light-transparant-white p-4 rounded-3 shadow-lg hover-lift">
                    <h4 class="fw-bold mb-4 custom-text-primary">Kirim Pesan Cepat</h4>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="contact_name" class="form-label fw-bold text-dark-grey">Nama</label>
                                <input type="text" class="form-control form-control-lg" id="contact_name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact_email" class="form-label fw-bold text-dark-grey">Email</label>
                                <input type="email" class="form-control form-control-lg" id="contact_email" name="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contact_subject" class="form-label fw-bold text-dark-grey">Subjek</label>
                            <input type="text" class="form-control form-control-lg" id="contact_subject" name="subject" required>
                        </div>
                        <div class="mb-4">
                            <label for="contact_message" class="form-label fw-bold text-dark-grey">Pesan</label>
                            <textarea class="form-control form-control-lg" id="contact_message" name="message" rows="4" required></textarea>
                        </div>
                        {{-- Tombol diubah menjadi dark-blue-gradient --}}
                        <button type="submit" class="btn btn-dark-blue-gradient btn-lg px-4 py-3 shadow-lg"><i class="fas fa-paper-plane me-2"></i>Kirim Pesan</button>
                    </form>
                </div>
            </div>

            {{-- Kolom Kanan: Info Kontak --}}
            <div class="col-lg-6">
                <div class="contact-info">
                    <h4 class="fw-bold mb-4 text-yellow">Informasi Kontak</h4>
                    
                    {{-- Item Kontak diubah dari bg-light menjadi card dengan background putih transparan --}}
                    <div class="contact-item d-flex mb-4 p-3 bg-light-transparant-white rounded-3 shadow-sm hover-lift-small">
                        <i class="fas fa-map-marker-alt text-yellow fs-3 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1 custom-text-primary">Alamat Peternakan</h6>
                            <p class="text-muted-dark mb-0 small">Desa Sumber Rejo, Kec. Budidaya<br>Jawa Timur, Indonesia 61234</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-4 p-3 bg-light-transparant-white rounded-3 shadow-sm hover-lift-small">
                        <i class="fas fa-phone text-yellow fs-3 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1 custom-text-primary">Telepon</h6>
                            <p class="text-muted-dark mb-0 small">+62 321 4567 8901<br>+62 321 0987 6543</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-4 p-3 bg-light-transparant-white rounded-3 shadow-sm hover-lift-small">
                        <i class="fas fa-envelope text-yellow fs-3 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1 custom-text-primary">Email</h6>
                            <p class="text-muted-dark mb-0 small">info@budidayaikan.com<br>penjualan@budidayaikan.com</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-4 p-3 bg-light-transparant-white rounded-3 shadow-sm hover-lift-small">
                        <i class="fas fa-clock text-yellow fs-3 me-3"></i>
                        <div>
                            <h6 class="fw-bold mb-1 custom-text-primary">Jam Operasional</h6>
                            <p class="text-muted-dark mb-0 small">Senin - Jumat: 07:00 - 18:00<br>Sabtu: 07:00 - 14:00</p>
                        </div>
                    </div>
                </div>

                {{-- Ikuti Kami --}}
                <div class="mt-4">
                    <h6 class="fw-bold mb-3 text-yellow">Ikuti Kami</h6>
                    <div class="social-links d-flex gap-3">
                        {{-- Ikon diubah ke warna kuning --}}
                        <a href="#" class="social-link text-yellow fs-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link text-yellow fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link text-yellow fs-4"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link text-yellow fs-4"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="mt-4">
                    {{-- Tombol diubah menjadi dark-blue-gradient --}}
                    <a href="{{ route('contact') }}" class="btn btn-dark-blue-gradient btn-lg px-4 py-3 shadow-lg"><i class="fas fa-address-book me-2"></i>Kontak Lengkap</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Definisi Warna dan Gradient */
        :root {
            --dark-blue-color: #002244;
            --light-blue-color: #1a4c8a;
            --primary-color: #003366; 
            --yellow-color: #ffc107; /* Warna aksen kuning/emas */
            --gradient-start: #0a2c4d; /* Warna dari style inline */
            --gradient-end: #154e8d; /* Warna dari style inline */
        }
        
        .text-yellow {
            color: var(--yellow-color) !important;
        }
        .custom-text-primary {
            /* Teks judul di dalam card: tetap biru gelap agar kontras */
            color: var(--primary-color) !important;
        }
        .text-white-75 {
            /* Teks lead section: putih transparan */
            color: rgba(255, 255, 255, 0.75) !important;
        }

        /* Latar belakang Card Kontak dan Form */
        .bg-light-transparant-white {
            background-color: rgba(255, 255, 255, 0.9) !important;
        }
        
        /* Teks di dalam card transparan */
        .text-dark-grey {
             color: #343a40 !important; /* Agar label form terbaca */
        }
        .text-muted-dark {
             color: #6c757d !important; /* Agar paragraf kecil terbaca */
        }

        /* Tombol Gradient Baru */
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
            box-shadow: 0 10px 20px rgba(0, 34, 68, 0.5);
        }

        /* Hover Effect untuk Info Kontak */
        .hover-lift-small:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2) !important;
            transition: all 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px); 
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
            transition: all 0.4s ease;
        }

        /* Hover sosial media di dalam section kontak */
         .social-link:hover {
            color: var(--yellow-color) !important; 
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
    </style>
</section>
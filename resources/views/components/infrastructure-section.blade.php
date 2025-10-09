<<section id="infrastructure" class="section-padding py-5 py-md-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-white mb-3">Fasilitas Utama</h2>
            <p class="lead text-light">Komponen infrastruktur yang mendukung operasional budidaya ikan berkelanjutan di Kelompok "Pereng Mina" GAP</p>
        </div>

        <div class="row g-4">
            <!-- Kolam Budidaya -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                    <img src="{{ asset('assets/kolam.jpg') }}" class="card-img-top" alt="Kolam Budidaya"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary fw-bold">Kolam Budidaya</h5>
                        <p class="card-text text-muted">
                            Terdiri dari 26 kolam dengan luas bervariasi di area seluas 0,6 hektar. 
                            Setiap kolam dikelola oleh anggota (PIC) dengan tanggung jawab penuh terhadap jenis ikan yang dibudidayakan, seperti nila, lele, dan gurami.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mesin Pengolah Pakan -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                    <img src="{{ asset('assets/mesinnn.jpg') }}" class="card-img-top" alt="Mesin Pengolah Pakan"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title text-success fw-bold">Mesin Pengolah Pakan</h5>
                        <p class="card-text text-muted">
                            Mesin pelet pakan ikan berfungsi untuk memproduksi pakan tenggelam berbentuk silinder (3–5 cm). 
                            Bahan seperti tepung ikan, dedak, dan bungkil kedelai dicampur merata dalam mixer sebelum diproses menjadi pelet siap pakai, 
                            mengurangi ketergantungan pada pakan pabrikan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Instalasi PLTS -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden card-hover">
                    <img src="{{ asset('assets/tenaga.jpg') }}" class="card-img-top" alt="Instalasi PLTS"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title text-warning fw-bold">Instalasi PLTS</h5>
                        <p class="card-text text-muted">
                            Sistem PLTS hybrid 1500 WP dipasang di gazebo utama dan berfungsi sebagai sumber daya penerangan serta penggerak pompa air. 
                            Energi surya ini membantu mengurangi biaya listrik dan mendukung operasional budidaya ikan yang ramah lingkungan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <div class="text-center mt-5">
            <a href="/infrastructure" class="btn btn-gradient btn-lg px-4 py-3 shadow-lg"><i
                    class="fas fa-arrow-right me-2"></i>Lihat Semua Fasilitas</a>
        </div>
    </div>

    <style>
        /* CSS yang diperbarui untuk gradasi baru */
        #infrastructure {
            /* Gradasi Biru Tua Horizontal yang baru */
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            border-bottom: 2px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
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
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }
    </style>
</section>
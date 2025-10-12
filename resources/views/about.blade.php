@extends('layouts.app')

@section('title', 'About Us - Company Name')

@section('content')
    {{-- HERO SECTION --}}
    <section class="hero-section position-relative overflow-hidden d-flex align-items-center justify-content-center"
        style="min-height: 89vh;">
        
        <!-- Gambar Background -->
        <img src="{{ asset('assets/berem.jpg') }}" alt="Background"
            class="position-absolute top-0 start-0 w-100 h-100"
            style="object-fit: cover; filter: brightness(55%); z-index: -2;">
        
        <!-- Overlay gradasi hitam -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.85)); z-index: -1;"></div>

        <!-- Konten -->
        <div class="container text-center text-white px-4">
            <h1 class="fw-bold mb-3 animate-fadeInUp" 
                style="font-size: 2.5rem; text-shadow: 0 4px 15px rgba(0,0,0,0.9);">
                Tentang Kami
            </h1>

            <p class="lead mb-4 mx-auto animate-fadeInUp-delay"
                style="max-width: 750px; font-size: 1.1rem; line-height: 1.7;
                text-shadow: 0 2px 8px rgba(0,0,0,0.8);">
                Pionir budidaya ikan modern yang menggabungkan teknologi canggih dengan praktik berkelanjutan
                untuk masa depan akuakultur Indonesia.
            </p>

            <div class="hero-buttons d-flex justify-content-center gap-3 animate-fadeInUp-delay2">
                <a href="#profile" 
                    class="btn btn-gradient-modern px-4 py-3 fs-6 shadow-lg">
                    <i class="fas fa-info-circle me-2"></i>Profil
                </a>
                <a href="#vision" 
                    class="btn btn-outline-light px-4 py-3 fs-6 shadow-lg">
                    <i class="fas fa-eye me-2"></i>Visi & Misi
                </a>
                <a href="#team" 
                    class="btn btn-outline-light px-4 py-3 fs-6 shadow-lg">
                    <i class="fas fa-users me-2"></i>Tim Ahli
                </a>
            </div>
        </div>
    </section>

    {{-- SECTION PROFIL PERENG MINA --}}
    <section id="profile" class="section-padding position-relative overflow-hidden bg-gradient-custom text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 animate-slideLeft">
                    <img src="{{ asset('assets/ss.jpg') }}" alt="Profil Pereng Mina"
                        class="img-fluid rounded-4 shadow-lg hover-scale"
                        style="border: 3px solid rgba(255,255,255,0.15);">
                </div>
                <div class="col-lg-6 animate-fadeUp">
                    <h2 class="fw-bold mb-4 text-white">Profil Pereng Mina GAP</h2>
                    <p class="lead text-light">
                        Kelompok Pembudidaya Ikan “Pereng Mina” GAP mempunyai usaha di peternakan ikan Nila, Gurami, dan lele,
                         dengan luasan area sebesar 0,6 Ha. Jumlah anggotanya adalah 29 orang, 
                         dan memiliki kolam 26 buah dengan luasan yang bervariasi. Masing-masing kolam ada PIC nya yang akan bertanggung jawab terhadap pemeliharaan ikan yang dipelihara.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION VISI & MISI --}}
    <section id="vision" class="section-padding position-relative overflow-hidden bg-gradient-custom text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 animate-slideLeft">
                    <img src="{{ asset('assets/benner.jpg') }}" alt="Visi dan Misi Budidaya Ikan"
                        class="img-fluid rounded-4 shadow-lg hover-scale"
                        style="border: 3px solid rgba(255,255,255,0.15);">
                </div>

                <div class="col-lg-6 animate-fadeUp">
                    <h2 class="fw-bold mb-4 text-white">Motto, Visi & Misi</h2>
                    <div class="vision-mission mb-4">
                        <div class="feature-item d-flex mb-4 p-4 rounded-4 shadow-sm hover-lift glass-card">
                            <i class="fas fa-quote-left text-info me-3 mt-1 fs-2"></i>
                            <div>
                                <h4 class="text-info mb-2">Motto</h4>
                                <p class="text-light mb-0 fst-italic">
                                    "Jujur, Inovatif, Teladan dan Untung (JITU)"
                                </p>
                            </div>
                        </div>

                        <div class="feature-item d-flex mb-4 p-4 rounded-4 shadow-sm hover-lift glass-card">
                            <i class="fas fa-eye text-warning me-3 mt-1 fs-2"></i>
                            <div>
                                <h4 class="text-warning mb-2">Visi</h4>
                                <p class="text-light mb-0">
                                    Paguyuban Pembudidaya Ikan Pereng Mina GAP menjadi paguyuban andalan,
                                    yang memprioritaskan kesejahteraan ekonomi anggotanya dengan sistem usaha budidaya yang baik,
                                    berdasarkan pengetahuan modern, ramah lingkungan dan berkelanjutan.
                                </p>
                            </div>
                        </div>

                        <div class="feature-item d-flex mb-4 p-4 rounded-4 shadow-sm hover-lift glass-card">
                            <i class="fas fa-bullseye text-success me-3 mt-1 fs-2"></i>
                            <div>
                                <h4 class="text-success mb-2">Misi</h4>
                                <ul class="text-light mb-0 ps-3">
                                    <li>Meningkatkan kualitas sumberdaya dan taraf ekonomi pembudidaya ikan dengan basis kompetensi
                                        melalui sistem usaha yang baik dan teknis budidaya ikan yang inovatif, produktif, berkelanjutan, dan menguntungkan.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <style>
        /* Background section */
        .bg-gradient-custom {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            border-bottom: 2px solid rgba(255,255,255,0.2);
        }

        /* Tombol gradasi modern */
        .btn-gradient-modern {
            background: linear-gradient(135deg, #007bff 0%, #0044cc 100%);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-gradient-modern:hover {
            background: linear-gradient(135deg, #3399ff 0%, #003399 100%);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4);
        }

        /* Animasi fadeInUp */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeInUp { animation: fadeInUp 1s ease-out; }
        .animate-fadeInUp-delay { animation: fadeInUp 1.5s ease-out; }
        .animate-fadeInUp-delay2 { animation: fadeInUp 2s ease-out; }

        @keyframes slideLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .animate-slideLeft { animation: slideLeft 1s ease-out; }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .hover-scale:hover { transform: scale(1.05); transition: transform 0.3s ease; }
        .hover-lift:hover, .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2) !important;
            transition: all 0.3s ease;
        }

        .section-padding { padding: 5rem 0; }

        @media (max-width: 768px) {
            .section-padding { padding: 3rem 0; }
            .hero-section { min-height: 60vh; }
        }
    </style>
@endsection

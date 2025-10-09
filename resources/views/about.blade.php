@extends('layouts.app')

@section('title', 'About Us - Company Name')

@section('content')
    <section class="hero-section position-relative overflow-hidden"
        style="min-height: 89vh; background: url('{{ asset('assets/benner.jpg') }}') center/cover no-repeat; display: flex; align-items: center;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(4, 33, 66, 0.75);"></div>
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-20 fw-bold mb-20 animate-fadeUp">Tentang Kami</h1>
                    <p class="lead fs-4 mb-4 animate-fadeUp-delay">
                        Pionir budidaya ikan modern yang menggabungkan teknologi canggih dengan praktik berkelanjutan
                        untuk masa depan akuakultur Indonesia.
                    </p>
                    <div class="hero-buttons d-flex justify-content-center gap-3 animate-fadeUp-delay2">
                        <a href="#profile" class="btn btn-gradient btn-lg px-4 py-3 fs-5 shadow-lg">
                            <i class="fas fa-info-circle me-2"></i>Profil
                        </a>
                        <a href="#vision" class="btn btn-outline-light btn-lg px-4 py-3 fs-5 shadow-lg">
                            <i class="fas fa-eye me-2"></i>Visi & Misi
                        </a>
                        <a href="#team" class="btn btn-outline-light btn-lg px-4 py-3 fs-5 shadow-lg">
                            <i class="fas fa-users me-2"></i>Tim Ahli
                        </a>
                    </div>
                </div>
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
                         dan memiliki kolam 26 buah dengan luasan yang bervariasi. Masing-masing kolam ada PIC nya yang akan bertanggung jawab terhadap pemeliharaan ikan yang dipelihara..
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

    {{-- SECTION TIM AHLI --}}
    <section id="team" class="section-padding bg-gradient-custom text-white position-relative">
        <div class="container">
            <div class="text-center mb-5 animate-fadeUp">
                <h2 class="fw-bold mb-3">Tim Ahli Kami</h2>
                <p class="lead text-light">Para ahli akuakultur dengan pengalaman bertahun-tahun dalam budidaya ikan modern</p>
            </div>
            <div class="row g-4">
                @foreach ([ 
                    ['nama' => 'Dr. Ahmad Santoso', 'jabatan' => 'Direktur Teknik & Akuakultur'],
                    ['nama' => 'Ir. Siti Nurhaliza', 'jabatan' => 'Manajer Operasional'],
                    ['nama' => 'Dr. Budi Prasetyo', 'jabatan' => 'Kepala Riset & Pengembangan'] 
                ] as $member)
                    <div class="col-lg-4 col-md-6 mb-4 animate-fadeUp-delay">
                        <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden card-hover glass-card text-center p-4">
                            <img src="{{ asset('assets/template.jpg') }}" alt="{{ $member['nama'] }}"
                                class="rounded-circle mb-3 mx-auto border border-3 border-info"
                                style="width: 120px; height: 120px; object-fit: cover;">
                            <h5 class="fw-bold text-white">{{ $member['nama'] }}</h5>
                            <p class="text-info mb-2">{{ $member['jabatan'] }}</p>
                            <p class="small text-light">Ahli berpengalaman yang berperan penting dalam pengembangan budidaya ikan berkelanjutan.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .bg-gradient-custom {
            background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%);
            border-bottom: 2px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .btn-gradient {
            background: linear-gradient(90deg, #00aaff, #007bff);
            border: none;
            color: white;
            transition: 0.3s;
        }
        .btn-gradient:hover {
            background: linear-gradient(90deg, #0095dd, #005ce6);
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .animate-fadeUp { animation: fadeUp 1s ease-out; }
        .animate-fadeUp-delay { animation: fadeUp 1.3s ease-out; }
        .animate-fadeUp-delay2 { animation: fadeUp 1.6s ease-out; }
        .animate-slideLeft { animation: slideLeft 1s ease-out; }

        .hover-scale:hover { transform: scale(1.05); transition: transform 0.3s ease; }
        .hover-lift:hover, .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2) !important;
            transition: all 0.3s ease;
        }
        .section-padding { padding: 5rem 0; }
        @media (max-width: 768px) {
            .section-padding { padding: 3rem 0; }
            .hero-section { min-height: 50vh; }
        }
    </style>
@endsection

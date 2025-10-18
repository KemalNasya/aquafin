<header id="main-header" class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top py-3"
    style="background: linear-gradient(90deg, #0a2c4d 0%, #154e8d 100%); border-bottom: 2px solid rgba(255,255,255,0.2); transition: all 0.3s ease;">
    <div class="container">
        <a class="navbar-brand fw-bold text-white fs-3 d-flex align-items-center" href="/">
            <img src="{{ asset('assets/logo_PMGAP.png') }}" alt="Logo Pereng Mina GAP"
                class="me-2" style="width: 45px; height: 45px; object-fit: contain;">
            Pereng Mina GAP
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <x-nav-link href="/" :active="request()->routeIs('home')">Beranda</x-nav-link>
                <x-nav-link href="/about" :active="request()->routeIs('about')">Tentang Kami</x-nav-link>
                <x-nav-link href="/infrastructure" :active="request()->routeIs('infrastructure')">Infrastruktur</x-nav-link>
                <x-nav-link href="/article" :active="request()->routeIs('article')">Artikel</x-nav-link>
                <x-nav-link href="/gallery" :active="request()->routeIs('gallery')">Galeri</x-nav-link>
                <x-nav-link href="/contact" :active="request()->routeIs('contact')">Kontak</x-nav-link>
            </ul>
        </div>
    </div>
    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            if (window.scrollY > 80) {
                header.classList.add('glass');
            } else {
                header.classList.remove('glass');
            }
        });

        // Animate fish logo every 2 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const fishLogo = document.getElementById('fish-logo');
            setInterval(function() {
                fishLogo.classList.toggle('moving');
            }, 1500);
        });
    </script>
    <style>
        .glass {
            
            background: rgba(10, 44, 77, 0.5) !important; /* Menggunakan warna gelap dari gradasi baru dengan transparansi */
            backdrop-filter: blur(15px) !important;
            -webkit-backdrop-filter: blur(15px) !important;
            border-bottom: 2px solid rgba(255, 255, 255, 0.4) !important;
            box-shadow: 0 4px 20px rgba(21, 78, 141, 0.4) !important; /* Menggunakan warna terang dari gradasi baru dengan transparansi */
        }

        #fish-logo.moving {
            animation: swim 1s ease-in-out;
        }

        @keyframes swim {
            0% {
                transform: rotate(0deg) translateX(0);
            }

            50% {
                transform: rotate(10deg) translateX(5px);
            }

            100% {
                transform: rotate(0deg) translateX(0);
            }
        }
    </style>
</header>
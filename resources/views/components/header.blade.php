<header id="main-header" class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top py-3"
    style="background: linear-gradient(90deg, #001f3f 0%, #0074D9 50%, #00bfff 100%); border-bottom: 2px solid rgba(255,255,255,0.2); transition: all 0.3s ease;">
    <div class="container">
        <a class="navbar-brand fw-bold text-white fs-3" href="/">
            <i id="fish-logo" class="fas fa-fish me-2 text-warning"></i>CompanyName
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
            background: rgba(0, 31, 63, 0.5) !important;
            backdrop-filter: blur(15px) !important;
            -webkit-backdrop-filter: blur(15px) !important;
            border-bottom: 2px solid rgba(255, 255, 255, 0.4) !important;
            box-shadow: 0 4px 20px rgba(0, 116, 217, 0.4) !important;
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
